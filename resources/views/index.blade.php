{{Session::reflash()}}

@include('common.errorsettings')
@include('common.head')

<link rel="stylesheet" type="text/css" href="/layui/css/layui.css">
<link rel="stylesheet" type="text/css" href="/css/one.css">
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="/layer/layer.js" type="text/javascript" charset="utf-8" async defer></script>

@include('common.rapidsearch')

<main class="app--core">

    @include('common.navigation')


    @if($over_three_error!='')
        <script>
            layer.alert('{{$over_three_error}}', {
                skin: 'layui-layer-lan' //样式类名
                ,closeBtn: 0
            });

        </script>
    @endif

    @if (session('WaitForMail') == '請確認信件')

        <script>
            layer.alert('為了確保您具備學生身分，請至信箱確認信件！', {
                skin: 'layui-layer-molv' //样式类名
                ,closeBtn: 0
            });
        </script>

        {{  Session::forget('WaitForMail') }}
    @endif

    @if (session('getmail') == '以確認信件')

        {{ $data->email }}

    @endif


    @if (session('verify_ok') == '審核成功')

        <script>
            layer.alert('恭喜，身分審核成功，登入即可使用', {
                skin: 'layui-layer-molv' //样式类名
                ,closeBtn: 0
            });
        </script>

        {{  Session::forget('verify_ok') }}

    @endif

    @if (session('landlord_msg') == '房東註冊成功')

        <script>
            layer.alert('恭喜註冊成功，登入後即可刊登房屋！', {
                skin: 'layui-layer-molv' //样式类名
                ,closeBtn: 0
            });
        </script>

        {{  Session::forget('landlord_msg') }}
    @endif
    <section class="rslt">
        <div >

            <button type="submit" class="layui-btn layui-btn-radius  " value="lists" onclick="btn(this)">所有房屋</button>
            <button type="submit" class="layui-btn layui-btn-radius   layui-btn-danger" value="hot_views"  onclick="btn(this)">＃熱門瀏覽</button>
            <button type="submit" class="layui-btn  layui-btn-radius  layui-btn-warm" value="hot_collcect"  onclick="btn(this)">＃熱門收藏</button>


        </div>


        <nav class="rslt__view" >


            <div class="rslt__view__acts">
                <form>
                    <label class="ui-dd">
                        <select name="result-sort" id="">
                            <option value="relevant">價格↑</option>
                            <option value="relevant">價格↓</option>
                        </select>
                        <i class="ion ion-ios-arrow-down"></i>
                    </label>
                </form>

            </div>
        </nav>

        <ul class="rslt__feed">
            @if($houses)
                @foreach($houses as $house)
                    <li class="feed__itm" js-result-item><!--item 1 -->
                        <div class="feed__itm__inr">
                            <div class="feed__itm__img" style="background-image: url('{{  $house->file1 }}')" >
                                <span class="feed__itm__prc">${{ $house->rental }} 元/月</span>
                                <button class="btn__fl btn--fav" js-item-fav>
                                    <i class="btn__seg ion ion-android-favorite-outline"></i>
                                    <i class="btn__seg ion ion-android-favorite"></i>
                                </button>
                            </div>
                            <h5 class="feed__itm__ttl">{{ $house->housename }}<span style="float: right; color: firebrick;">{{ '瀏覽人數：'.$house->click.' '}}</span></h5>
                            <p class="feed__itm__lbl lbl--1">by {{ $house->contact.' '}}&nbsp;&nbsp;
                                <span>
                                   {{ '#'.$house->housetype.' '}}
                                </span>
                            </p>

                            @if(count(session('login'))==0)
                                <button class="layui-btn layui-btn-radius layui-btn-normal" style="float: right;" type="button" onclick="javascript:location.href='/house/{{ $house->house_id }}'">查看房屋</button>
                            @endif

                            @if (session('login'))
                                @if(count(session('login'))>0)
                                    @foreach(session('login') as $login)
                                        <button class="layui-btn layui-btn-radius layui-btn-normal" style="float: right;" type="button" onclick="javascript:location.href='/house/{{ $house->house_id }}/{{ $login->user_id }}'">查看房屋</button>
                                    @endforeach
                                @endif
                            @endif
                        </div>
                    </li><!--@end feed item-->
                @endforeach
            @endif
        </ul>

        <div class="feed__pgr" style="margin: 0 auto;  text-align:center;">
            {!! $houses->render() !!}
        </div>

        @include('common.footer')

        <script src="/js/one.js" type="text/javascript" charset="utf-8" async defer></script>

        <script type="text/javascript">
            function btn($val){
                switch($val.value) {
                    case 'lists':
                        window.location.href = "/index";
                        break;
                    case 'hot_views':
                        window.location.href = "/index/2";
                        break;
                    case 'hot_collcect':
                        window.location.href = "/index/3";
                        break;
                }
            }
        </script>