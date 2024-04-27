<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        DB::table("users")->insert([
            "name"=> "pramudya", 
            "email"=> "acimalaka@mampus.com",
            "password"=> Hash::make("1324")
        ]);

        DB::table("users")->insert([
            "name"=> "abidzar", 
            "email"=> "syalakala@mampus.com",
            "password"=> Hash::make("1324")
        ]);
    }
}
