<?php

use Illuminate\Database\Seeder;


class ProductsTableSeeder extends Seeder
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
                'product_name' => 'African Glass Catfish',
                'product_description' => 'lll' ,
                'prices' => 100               
            ],
            [
                'product_name' => 'African Lungfish',
                'product_description' => 'll' ,
                'prices' => 200        
            ],
            [
                'product_name' => 'Black Bass',
                'product_description' => 'lll',
                'prices' => 300         
            ],
            [
                'product_name' => 'Conger Eel',
                'product_description' => 'lll',
                'prices' => 400            
            ]
        ]); 
    }
}
