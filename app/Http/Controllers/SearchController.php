<?php

namespace App\Http\Controllers;

use App\Models\user_recipe;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    function Search(Request $request){
        $search = $request->search;
        $user_recipes = user_recipe::where(function($query) use ($search) {

            $query->where("title","like","%$search%")
            ->orWhere("description","like","%$search%");
         })->get();
         
        $users = User::where(function($query) use ($search) {
            $query->where("name","like","%$search%");
        })->get();

        return view("search/index", compact("user_recipes","users","search"));
    }

    function SearchResepAPI(Request $request) {
        $search = $request->input('search', '');  // Default to an empty string if not provided
    
        if (empty($search)) {
            return response()->json(['message' => 'Search parameter is required'], 400);
        }
    
        $user_recipes = user_recipe::where(function($query) use ($search) {
            $query->where("title", "like", "%{$search}%")
                  ->orWhere("description", "like", "%{$search}%");
        })->get();
    
        return response()->json($user_recipes);
    }
    
        function SearchUserAPI(Request $request){
            $search = $request->input('search', '');  // Default to an empty string if not provided
    
            if (empty($search)) {
                return response()->json(['message' => 'Search parameter is required'], 400);
            }
            $users = User::where(function($query) use ($search) {
                $query->where("name","like","%$search%");
            })->get();
        
             return response()->json($users);
            }
}

