<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productseeder extends Seeder
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
                'name'=>'LS50 Meta',
                'price'=>'$1500',
                'description'=>"LS50 Meta is a highly precise, emotionally engaging loudspeaker built on revolutionary acoustic technology.",
                'category'=>'Loudspeakers',
                'gallery'=>"https://cdn.shopify.com/s/files/1/0113/9897/1450/products/img-pdt-ls50m-pks-31_1024x1024.png?v=1599806749"
            ],

            [
                'name'=>'Bowers&Wilkins 606 S2 Anniversary Edition',
                'price'=>'$1400',
                'description'=>"The 606 S2 Anniversary Edition is the seventh generation of our iconic 600 Series standmount speaker.",
                'category'=>'Loudspeakers',
                'gallery'=>"https://www.bowerswilkins.com/sites/default/files/styles/viewport/public/2020-08/606-Black_0.jpg?itok=u9SYUCfg"
            ],
                
            [
                'name'=>'Mcintosh MC275 Vacuum Tube Amplifier',
                'price'=>'$10000',
                'description'=>"This sixth generation MC275 has many subtle enhancements from the previous release that greatly improve performance.",
                'category'=>'Amplifiers',
                'gallery'=>"https://www.mcintoshlabs.com/-/media/images/mcintoshlabs/products/productimages/mc275b/mc275b-angle.ashx"
            ]



        ]);
    }
}
