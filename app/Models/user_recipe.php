<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_recipe extends Model
{
    protected $fillable = [
        'recipeId',
        'userId',
        'title',
        'description',
        'instruction',
        'createdAt',
        'origin',
        'rating',
        'image',
        'timeToCook',
        'tahun',
        'category'
    ];
}
