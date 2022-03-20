<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
    
        DB::table('users')->insert([
            [
                'name'=>'Jakiya joya',
                'email'=>'jakiya.joya@gmail.com',
                'pnumber'=>'01533480663 ',
                'password'=>hash::make('dewan123')

            ]


        ]);
       
    }
}
