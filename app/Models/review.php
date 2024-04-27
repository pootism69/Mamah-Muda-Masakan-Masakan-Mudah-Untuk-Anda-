<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    protected $fillable = [
        'userId',
        'recipeId',
        'comment',
        'rating'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'userId');
    }

    public function recipe(){
        return $this->belongsTo(user_recipe::class, 'recipeId');
    }
}
