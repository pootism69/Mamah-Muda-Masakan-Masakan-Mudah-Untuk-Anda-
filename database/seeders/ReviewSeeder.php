<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("reviews")->insert([
        'userId' => 2,
        'recipeId'=> 1,
        'comment' => "wow sangat bagus",
        'rating' => 4,
        ]);
    }
}
