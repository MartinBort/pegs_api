<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function profile($username)
    {
        //return $user = User::whereUsername($username)->first();
        $user = User::where('username', $username)->first();

        return view('user.profile', compact('user'));

        //return $user;

        //or get email of user, instead of all of user
        //return $user->email;
    }
}
