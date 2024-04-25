<?php

namespace App\Http\Controllers;

use App\Models\user_recipe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   function home(){
    return view("homepage");
   }
   
   
}
