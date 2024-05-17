<?php

namespace App\Http\Controllers;
use App\Models\review;
use App\Models\user_recipe;


use Illuminate\Http\Request;

class RecipeController extends Controller
{
    function info($filter){
        $search = $filter;
        $user_recipes = user_recipe::where(function($query) use ($search) {

            $query->where("recipeId","like","%$search%");
         })->get();

        $reviews = review::where(function($query) use ($search) {
            $query->where("recipeId","like","%$search%");
        })->get();

        return view("recipe/info", compact("user_recipes","reviews", "search"));
    }

    function post(){
        return view("postresep");
    }
    function create(Request $request){
        $request->validate([
            'name'=>'required',
            'bahan'=>'required',
            'instruction'=> 'required',
            'waktu' => 'required',
        ],[
            'name.required'=>'harap masukan nama',
            'bahan'=>'harap masukan bahan',
            'instruction'=> 'harap masukan instruksi',
            'waktu' => 'harap maksukan waktu',
        ]);

        $data =[
            'title'=>$request->name,
            'userId'=> auth()->user()->id,
            'category'=> $request->category,
            'tahun'=> $request->tahun,
            'origin'=> $request->khas,
            'tingkat'=> $request->tingkat, 
            'timeToCook'=> $request->waktu,
            'ingredient'=> $request->bahan,
            'instruction'=> $request->instruction,              
        ];
        user_recipe::create($data);

        return redirect()->route("user", ['filter' => auth()->user()->id ]);
    }

    function createReview(Request $request, $filter){
        $request->validate([
            'name'=>'required',
            'comment'=>'required',
        ],[
            'name.required'=>'harap masukan nama',
            'comment.required'=>'harap masukan komentar',
        ]);
        $data =[
            'userId'=> auth()->user()->id,
            'recipeId'=>$filter,
            'comment'=>$request->comment,
            'rating' => $request->nilai
        ];
        review::create($data);
        return redirect()->route("resep", ['filter' => $filter ]);

    }

    function destroy($filter){
        user_recipe::destroy($filter);
        return redirect()->route("user", ['filter' => auth()->user()->id ]);
    }

    public function edit($filter){
        $data = user_recipe::where('recipeId', $filter)->first();
        return view('editresep')->with('data', $data)->with('search', $filter);
    }

    function update(Request $request, $filter){
        $request->validate([
            'name'=>'required',
            'bahan'=>'required',
            'instruction'=> 'required',
            'waktu' => 'required',
        ],[
            'name.required'=>'harap masukan nama',
            'bahan'=>'harap masukan bahan',
            'instruction'=> 'harap masukan instruksi',
            'waktu' => 'harap maksukan waktu',
        ]);

        $data =[
            'title'=>$request->name,
            'category'=> $request->category,
            'tahun'=> $request->tahun,
            'origin'=> $request->khas,
            'tingkat'=> $request->tingkat, 
            'timeToCook'=> $request->waktu,
            'ingredient'=> $request->bahan,
            'instruction'=> $request->instruction,              
        ];
        user_recipe::where('recipeId', $filter)->update($data);

        return redirect()->route("resep", ['filter' => $filter ])->with('success', 'Resep Berhasil di edit');
    }

}
