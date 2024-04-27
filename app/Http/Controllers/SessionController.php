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
            return redirect('/');
    } else {
        return redirect('sesi')->withErrors('username atau password salah');
    };
    }

    function register(){
        return view('sesi/register');
    }

    function create(Request $request){
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
            return redirect('/');
        } else {
            return redirect('register')->withErrors('pendaftaran gagal somehow');
        };


    }

    function akun(){
        return view("/akun");
    }

    function logout(){
        Auth::logout();
        return redirect("/sesi");
    }

    public function edit()
    {
        $user = Auth::user();
        return view('edituser', compact('user'));
    }

    public function update(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'nullable|string|min:8', // Add any additional validation rules for the password if needed
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Update user details
        $user->name = $request->name;
        $user->email = $request->email;

        // Check if password is provided and update if it is
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }

        // Save the updated user
        $user->save();

        // Redirect back with success message or handle response as needed
        return redirect()->back()->back();
    }


}
