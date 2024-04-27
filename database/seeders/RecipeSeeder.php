<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("user_recipes")->insert([
            'userId'=> 1,
            'title'=> "chicken",
            'description'=> "its just chicken lol",
            'instruction'=> "just cook it lmfao",
            'origin'=> "asia",
            'image'=>"www.google.com",
            'rating'=> 4,
            'timeToCook' => "20 Menit",
            'tahun' => "2020",
            'category' => "olahan ayam",
            'tingkat'  => "Mudah",
            'ingredient' => "1 ons ayam\n 2kg minyak\n"
        ]);
    }
}
