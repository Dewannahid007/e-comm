<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //

        DB::table('products')->insert([
            [

                'company_name'=>'Oppo',
                'product_model'=>'Oppo Reno7 Z 5G',
                'price'=>'2000',
                'description'=>'Qualcomm SM6375 Snapdragon 695 5G (6 nm)',
                'category'=>'Mobile',
                'gallery'=>'https://fdn2.gsmarena.com/vv/pics/oppo/oppo-reno7-z-5g-1.jpg'
            ],
            [
                'company_name'=>'Xiaomi',
                'product_model'=>'Poco X2',
                'price'=>'1000',
                'description'=>'Also known as Xiaomi POCO X2 Special Edition',
                'category'=>'Mobile',
                'gallery'=>'https://fdn2.gsmarena.com/vv/pics/xiaomi/xiaomi-poco-m4-pro-1.jpg'

            ],
            [
                'company_name'=>'Apple',
                'product_model'=>'I phone 13pro Max',
                'price'=>'2000',
                'description'=>'Versions: A2643 (International); A2484 (USA); A2641 (Canada, Japan); A2644 (China, Hong Kong); A2645 (Russia)',
                'category'=>'Mobile',
                'gallery'=>'https://fdn2.gsmarena.com/vv/pics/apple/apple-iphone-13-pro-max-01.jpg'
            ],
            [
                'company_name'=>'Samsung',
                'product_model'=>'QN55Q70AA 55"',
                'price'=>'2000',
                'description'=>'QUANTUM PROCESSOR 4K: Elevate your picture to 4K with machine based AI.',
                'category'=>'Tv',
                'gallery'=>'https://m.media-amazon.com/images/I/61HowQc-UDL._AC_SL1157_.jpg'

            ]
            
            

        ]);
    }
}
