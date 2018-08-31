<?php

use Illuminate\Database\Seeder;

class categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
            'name' => 'Dress',
            'description' => 'abcde'
            ],
            [
            'name' => 'Bird',
            'description' => 'abcdef'       
            ],
            [
            'name' => 'Cat',
            'description' => 'abcdefg'
            ],
            [
            'name' => 'Dog',
            'description' => 'abcdefgh'
            ]
        ]); 
    }
}
