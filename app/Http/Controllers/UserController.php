<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user = User::where(['email'=> $req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "UserName Or Password is Invalid";
        }
        else
        {
            $req->session("user")->put('user',$user);
            return redirect("/");
        }
    }
}