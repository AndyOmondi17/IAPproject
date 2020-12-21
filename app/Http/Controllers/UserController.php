<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function register (Request $req){
        
        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->name);
        $user->save();

        return redirect('/login');
    }   
    function login (Request $req){ 
        $hashedpassword=Hash::make($req->password); 
        $email=$req->email;
        $credentials=$req->only($hashedpassword,$email);
        if(Auth::attempt($credentials)){
            $req->session()->regenerate();
            return redirect()->intended('/');
            
        }else{
            return "Username and Password do not match";
        }
        // return->back()->withErrors(['Email'=>'Email failure']);
        // $user= User::where(['email'=>$req->email])->first();
        // if(!$user || !Hash::check($req->password,$user->password))
        // {
        //     return "Username and Password do not match";
        // }
        // else{
        //     $req->session()->put('user',$user);
        //     return redirect('/');
        // }
    }
    
}
