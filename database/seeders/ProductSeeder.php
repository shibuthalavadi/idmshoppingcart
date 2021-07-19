<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Samsung Mobile',
                'description'=>'Samsung Neo Smart Phone,8GB RAM,512GB,64MPX',
                'category'=>'Mobile',
                'price'=>'$500',
                'gallery'=>'https://www.91-cdn.com/hub/wp-content/uploads/2021/07/Samsung-Galaxy-M22.png'
            ],
            [
                'name'=>'Oppo Mobile',
                'description'=>'Oppo Smart Phone,2GB RAM,32GB,5MBPX',
                'category'=>'Mobile',
                'price'=>'$200',
                'gallery'=>'https://www.cheap-phones.com/wp-content/uploads/2015/09/LG-G3-T-Mobile.jpg'
            ],
            [
                'name'=>'IPhone',
                'description'=>'I Phone Smart Phone,8GB RAM,256GB,18MPX',
                'category'=>'Mobile',
                'price'=>'$800',
                'gallery'=>'https://assets.swappie.com/cdn-cgi/image/width=600,height=600,fit=contain,format=auto/iPhone-11-Pro-midnight-green-back.png'
            ],
            [
                'name'=>'Vivo Mobile',
                'description'=>'VIVO K20 Smart Phone,8GB RAM,64GB,24MPX',
                'category'=>'Mobile',
                'price'=>'$300',
                'gallery'=>'https://fdn2.gsmarena.com/vv/bigpic/vivo-y70t.jpg'
           ]
        ]);
    }
}
