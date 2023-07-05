<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller{

    public function index(){
        $users = User::all();
        return view('users', [
            'users' => $users,
        ]);
    }


    public function showUser(User $user){
        return view('user',[
            'name' => 'Moranguinho',
            'user' => $user,
        ]
    );
    }
}
