<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class productsTableSeeder extends Seeder
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
                'category_id' => 1,
                'product_name' => 'African Glass Catfish',
                'product_description' => 'lll' ,
                'prices' => 100                
            ],
            [
                'category_id' => 2,
                'product_name' => 'African Lungfish',
                'product_description' => 'll' ,
                'prices' => 200         
            ],
            [
                'category_id' => 3,
                'product_name' => 'Black Bass',
                'product_description' => 'lll',
                'prices' => 300          
            ],
            [
                'category_id' => 4,
                'product_name' => 'Conger Eel',
                'product_description' => 'lll',
                'prices' => 400             
            ]
        ]);
    }
}
