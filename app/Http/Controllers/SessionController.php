<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index(){
        return view("sesi/index");
    }

    function login(Request $request){
        Session::flash('name', $request->name);
        $request->validate([
            'name'=>'required',
            'password'=> 'required'
        ],[
            'name.required'=>'username harus diisi',
            'password.required'=> 'password harus diisi'
        ]);

        $infologin = [
            'name' => $request->name,
            'password'=> $request->password
        ];

        if(Auth::attempt($infologin)){
            return 'success';
    } else {
        return redirect('sesi')->withErrors('username atau password salah');
    };
    }

    function register(){
        return view('sesi/register');
    }

    function create(Request $request){
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name'=>'required|unique:users',
            'email'=>'required|email|unique:users',
            'password'=> 'required'
        ],[
            'name.required'=>'username harus diisi',
            'name.unique'=>'username sudah di ambil',
            'email.required'=> 'email harus diisi',
            'email.email'=> 'Silahkan masukan email yang valid',
            'email.unique'=> 'email sudah pernah didaftarkan, silahkan login',
            'password.required'=> 'password harus diisi'
        ]);

        $data =[
            'name'=>$request->name,
            'email'=> $request->email,
            'password'=> $request->password        
        ];
        User::create($data);

        $infologin = [
            'name'=> $request->name,
            'password'=> $request->password
        ];

        if(Auth::attempt($infologin)){
            return 'success';
        } else {
            return redirect('register')->withErrors('pendaftaran gagal somehow');
        };
    }


}
