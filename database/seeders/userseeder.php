<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'nama'=> "Muhammad Wahyudi",
            'email'=>'mwahyudii2003@gmail.com',
            'password'=> hash::make('12345678'),
            //'level'=>'admin'
        ]);
        //
    }
}
