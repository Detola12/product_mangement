<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request){
        $user = User::where('email',$request->email)->first();

        if(!$user || !Hash::check($user->password,$request->password)){
            return "Email or Password Incorrect";
        }
        else{
            $request->session()->put('user',$user);
            return redirect()->intended('dashboard');
        }
    }
}
