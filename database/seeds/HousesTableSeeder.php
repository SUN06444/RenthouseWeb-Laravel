<?php

use Illuminate\Database\Seeder;
use App\House;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        House::create([
            'user_id' =>'2',
            'email' =>'aaaaa@gmail.com',
            'phone'=>'0912345678',
            'contact' =>'張明將軍',
            'relationship' =>'房東',
            'housename' =>'勤益科大優質租屋',
            'address' =>'台中市太平區中山路二段57號',
            'lease_term' =>'一年',
            'rental' =>'4500',
            'housetype' =>'套房',
            'ping' =>'6',
            'house_age' =>'10',
            'deposit' =>'5000',
            'pet' =>'否',
            'elevator' =>'有',
            'opened' =>'否',
            'parking_spaces' =>'無',
            'house_limit' =>'無限制',
            'material' =>'水泥',
            'life_function' =>'公園,市場,超市,小吃店,警察局,便利商店',
            'curfew' =>'無',
            'equipment' =>'衣櫃,天然瓦斯,冰箱',
            'security_equipment' =>'緊急照明燈,監視器,安全走道',
            'identity_requirements' =>'只限女生',
            'balcony' =>'有',
            'others' =>'測試用資料~',
            'click' =>'0',
            'file1' =>'/uploads/2018-01-04/20180104063046210.jpg',
            'file2' =>'/uploads/2018-01-04/20180104063046133.jpg',
            'file3' =>'/uploads/2018-01-04/20180104063046108.jpg',
            'file4' =>'/uploads/2018-01-04/20180104063046417.jpg',
            'file5' =>'/uploads/2018-01-04/20180104063046546.jpg',
            'file6' =>'/uploads/2018-01-04/20180104063046905.jpg',
            'verify'=>'1'
        ]);
    }
}
