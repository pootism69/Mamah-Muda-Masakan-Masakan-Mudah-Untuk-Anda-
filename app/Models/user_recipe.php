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
        'origin',
        'rating',
        'image',
        'timeToCook',
        'tahun',
        'category',
        'tingkat',
        'ingredient'
    ];
    protected $primaryKey = "recipeId";

    public function user(){
        return $this->belongsTo(User::class, 'userId');
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }
    
    
    
}
