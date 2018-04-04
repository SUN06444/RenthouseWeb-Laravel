<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\House;
use App\User;

class PublishHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //刊登房屋(step1 - 填寫房東資料) -View
    {
        return view ('publish.lists');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //刊登房屋(step2 - 填寫房屋詳細資訊) -View
    {
        return view ('publish.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //建立房屋資料(step2)
    {
        $file = $request->file('img');
        $filePath =[];  // 定义空数组用来存放图片路径
        foreach ($file as $key => $value) {
            // 判断图片上传中是否出错
            if (!$value->isValid()) {
                exit("上傳圖片出錯，請重試！");
            }
            if(!empty($value)){//此处防止没有多文件上传的情况
                $allowed_extensions = ["png", "jpg", "gif"];
                if ($value->getClientOriginalExtension() && !in_array($value->getClientOriginalExtension(), $allowed_extensions)) {
                    exit('您只能上傳PNG、JPG或GIF格式的圖片！');
                }
                $destinationPath = '/uploads/'.date('Y-m-d'); // public文件夹下面uploads/xxxx-xx-xx 建文件夹
                $extension = $value->getClientOriginalExtension();   // 上传文件后缀
                $fileName = date('YmdHis').mt_rand(100,999).'.'.$extension; // 重命名
                $value->move(public_path().$destinationPath, $fileName); // 保存图片
                $filePath[] = $destinationPath.'/'.$fileName;

            }
        }
        // 返回上传图片路径，用于保存到数据库中
        // return $filePath;

        $lease = $request->lease_term;
        switch ($lease) {
            case '1':
                $lease = "1~3個月";
                break;
            case '2':
                $lease = "半年";
                break;
            case '3':
                $lease = "一年";
                break;
            case '4':
                $lease = "二年";
                break;
            case '5':
                $lease = "兩年以上";
                break;
            default:
                $lease = "未選擇租期";
                break;
        }

        $housetype = $request->housetype;
        switch ($housetype) {
            case '1':
                $housetype = "雅房";
                break;
            case '2':
                $housetype = "套房";
                break;
            case '3':
                $housetype = "公寓";
                break;
            default:
                $housetype = "未選擇房型";
                break;
        }

        $life_function = implode(',', $request->life_function);
        $equipment = implode(',', $request->equipment);
        $security_equipment = implode(',', $request->security_equipment);



        House::create([
            'phone'=>$request->phone,
            'contact'=>$request->contact,
            'relationship'=>$request->relationship,

            'user_id'=>$request->user_id,
            'email'=>$request->email,

            'housename'=>$request->housename,
            'address'=>$request->address,
            'rental'=>$request->rental,
            'deposit'=>$request->deposit,
            'ping'=>$request->ping,
            'house_age'=>$request->house_age,
            'curfew'=>$request->curfew,

            'lease_term'=>$lease,
            'housetype'=>$housetype,

            'identity_requirements'=>$request->identity_requirements,
            'pet'=>$request->pet,
            'opened'=>$request->opened,
            'elevator'=>$request->elevator,
            'parking_spaces'=>$request->parking_spaces,
            'balcony'=>$request->balcony,

            'life_function'=>$life_function,
            'equipment'=>$equipment,
            'security_equipment'=>$security_equipment,

            'material'=>$request->material,
            'house_limit'=>$request->house_limit,
            'others'=>$request->others,
            'click'=>'0',
            'file1'=>$filePath[0],
            'file2'=>$filePath[1],
            'file3'=>$filePath[2],
            'file4'=>$filePath[3],
            'file5'=>$filePath[4],
            'file6'=>$filePath[5],
            'verify'=>'0',

        ]);
        User::where('user_id', '=', $request->user_id)->update(['status' => 3 ]);
        return view ('publish.publish_success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request) //建立房東資料(step1)
    {
        Session::reflash();
        $request->session()->put('contact', $request->contact);
        $request->session()->put('relationship', $request->relationship);
        $request->session()->put('phone', $request->phone);

        $landlord_info_data = $request->session()->all();

        return redirect('publish/create')->with('landlord_info_data', $landlord_info_data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
