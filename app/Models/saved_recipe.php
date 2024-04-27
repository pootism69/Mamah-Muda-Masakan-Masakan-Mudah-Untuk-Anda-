<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class saved_recipe extends Model
{
    protected $fillable = [
        'savedRecipeId',
        'userId',
        'recipeId'
    ];
}
