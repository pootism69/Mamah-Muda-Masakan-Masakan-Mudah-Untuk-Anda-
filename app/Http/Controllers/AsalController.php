<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\user_recipe;

use Illuminate\Http\Request;

class AsalController extends Controller
{
    function asal($filter){
        $search = $filter;
        $user_recipes = user_recipe::where(function($query) use ($search) {

            $query->where("origin","like","%$search%");
         })->get();

        

        return view("filter/index", compact("user_recipes","search"));
    }

    function category($filter){

        $search = $filter;
        $user_recipes = user_recipe::where(function($query) use ($search) {

            $query->where("category","like","%$search%");
         })->get();

        return view("filter/index", compact("user_recipes","search"));

    }

    function tahun($filter){

        $search = $filter;
        $user_recipes = user_recipe::where(function($query) use ($search) {

            $query->where("tahun","like","%$search%");
         })->get();

        return view("filter/index", compact("user_recipes","search"));

    }

    function user($filter){

        $search = $filter;
        $users = User::where(function($query) use ($search) {

            $query->where("id","like","%$search%");
         })->get();

         $user_recipes = user_recipe::where(function($query) use ($search) {

            $query->where("userId","like","%$search%");
         })->get();

        return view("filter/user", compact("user_recipes","users","search"));

    }
    function asalApi($filter){
        $search = $filter;
        $user_recipes = user_recipe::where(function($query) use ($search) {

            $query->where("origin","like","%$search%");
         })->get();

        

        return response()->json($user_recipes);
    }

    function categoryApi($filter){

        $search = $filter;
        $user_recipes = user_recipe::where(function($query) use ($search) {

            $query->where("category","like","%$search%");
         })->get();

         return response()->json($user_recipes);

    }

    function tahunApi($filter){

        $search = $filter;
        $user_recipes = user_recipe::where(function($query) use ($search) {

            $query->where("tahun","like","%$search%");
         })->get();

         return response()->json($user_recipes);

    }

    function userApiResep($filter){

        $search = $filter;
         $user_recipes = user_recipe::where(function($query) use ($search) {

            $query->where("userId","like","%$search%");
         })->get();

         return response()->json($user_recipes);

    }

    function userApi($filter){
        $search = $filter;
        $users = User::where(function($query) use ($search) {

            $query->where("id","like","%$search%");
         })->get();

         return response()->json($users);
    }



}
