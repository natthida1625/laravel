<?php

use Illuminate\Database\Seeder;

class contactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                'name' => 'natthida',
                'email' => 'natthida@hotmail.com',
                'phone' => 895641235,
                'subject' => 'I want a phone call, now' ,
                'messages' => 'I want to help you get you the answers you need, and we can definitely get that done by eamil, but i will need your help.'     
            ],
            [
                'name' => 'Sompong',
                'email' => 'natthid@hotmail.com',
                'phone' => 945531210,
                'subject' => 'A' ,
                'messages' => 'aaaaaaaaa'         
            ],
            [
                'name' => 'Sirikanda',
                'email' => 'natthida@hotmail.com',
                'phone' => 987650978,
                'subject' => 'B' ,
                'messages' => 'bbbbbbbbb'      
            ],
            [
                'name' => 'Narongsuk',
                'email' => 'natthida@hotmail.com',
                'phone' => 86512330 ,
                'subject' => 'C' ,
                'messages' => 'ccccccccc'          
            ],
            [
                'name' => 'Jidapa',
                'email' => 'natthida@hotmail.com',
                'phone' => 989778964,
                'subject' => 'D' ,
                'messages' => 'ddddddddd'          
            ]

        ]);
    }
}
