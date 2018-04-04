{{Session::reflash()}}


<style>
    /*設定gmap_canvas顯示區(寬與高)*/
    #gmap_canvas{
        margin: auto;
        width:80%;
        height:50em;
    }
</style>
<!--地圖顯示區-->
<div id="gmap_canvas"></div>




@if (session('house_info'))
    @foreach(session('house_info') as $house_info)
        <input id="contact" name="contact"  type="hidden" class="layui-input" value=" {{ $set_address = $house_info->address }}" >

    @endforeach
@endif



<?php
$data_array = geocode($set_address);
$latitude = $data_array[0];
$longitude = $data_array[1];
$data_address = $data_array[2];
//-----Google map value End-----

//-----function start-----
function geocode($address){
    /*用來將字串編碼，在資料傳遞的時候，如果直接傳遞中文會出問題，所以在傳遞資料時，通常會使用urlencode先編碼之後再傳遞*/
    $address = urlencode($address);

    /*可參閱：(https://developers.google.com/maps/documentation/geocoding/intro)*/
    $url = "http://maps.google.com/maps/api/geocode/json?address={$address}&language=zh-TW";

    /*取得回傳的json值*/
    $response_json = file_get_contents($url);

    /*處理json轉為變數資料以便程式處理*/
    $response = json_decode($response_json, true);

    /*如果能夠進行地理編碼，則status會回傳OK*/
    if($response['status']='OK'){
        //取得需要的重要資訊
        $latitude_data = $response['results'][0]['geometry']['location']['lat']; //緯度
        $longitude_data = $response['results'][0]['geometry']['location']['lng']; //精度
        $data_address = $response['results'][0]['formatted_address'];

        if($latitude_data && $longitude_data && $data_address){

            $data_array = array();

            //一個或多個單元加入陣列末尾
            array_push(
                $data_array,
                $latitude_data, //$data_array[0]
                $longitude_data, //$data_array[1]
                '<b>地址: </b> '.$data_address //$data_array[2]
            );

            return $data_array; //回傳$data_array

        }else{
            return false;
        }

    }else{
        return false;
    }
}
//-----function end-----
?>



<!-----google map Start----->

<!--可參閱：(https://developers.google.com/maps/documentation/javascript/3.exp/reference)-->
<script src="http://maps.google.com/maps/api/js?language=zh-TW&key=AIzaSyAAdPzTTL1vTbf4pmtIQHSfM8mdT6TRwqg"></script>

<script>
    function init_map() {
        /*地圖參數相關設定 Start*/
        var Options = {
            zoom: 17, /*縮放比例*/
            center: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>) /*所查詢位置的經緯度位置*/
        };

        map = new google.maps.Map(document.getElementById("gmap_canvas"), Options);
        /*地圖參數相關設定 End*/

        /*自行設定圖標 Start*/
        var image = {
            url: 'https://google-developers.appspot.com/maps/documentation/javascript/examples/full/images/beachflag.png', /*自定圖標檔案位置或網址*/
            // This marker is 20 pixels wide by 32 pixels high.
            size: new google.maps.Size(20, 32), /*自定圖標大小*/
            // The origin for this image is (0, 0).
            origin: new google.maps.Point(0, 0),
            // The anchor for this image is the base of the flagpole at (0, 32).
            anchor: new google.maps.Point(0, 32)
        };

        marker = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>), /*圖標經緯度位置*/
            icon: image
        });
        /*自行設定圖標 End*/

        /*所查詢位置詳細資料 Start*/
        infowindow = new google.maps.InfoWindow({
            content: "<?php echo $data_address; ?>"
        });

        infowindow.open(map, marker);
        /*所查詢位置詳細資料 End*/
    }

    /*
    事件偵聽器
    (可參閱：https://developers.google.com/maps/documentation/javascript/events)
    */
    google.maps.event.addDomListener(window, 'load', init_map);
</script>


<!-----google map End----->
