<?php

use Illuminate\Database\Seeder;

class shopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
                'name' => 'A shop',
                'description' => 'aaaaaa'                 
            ],
            [                
                'name' => 'B shop',
                'description' => 'bbbbb'                
            ],
            [               
                'name' => 'C shop',
                'description' => 'ccccc'               
            ],
            [               
                'name' => 'D shop',
                'description' => 'ddddd'                
            ],
            [               
                'name' => 'E shop',
                'description' => 'eeeee'                
            ],
            [               
                'name' => 'F shop',
                'description' => 'fffff'                
            ]
        ]);
    }
}
