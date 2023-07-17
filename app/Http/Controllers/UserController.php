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

        // $user->teams()->attach(1);
        $user->teams()->sync([2,3]);
        $user->load('teams');

        return $user->teams;

        return view('user',[
            'name' => 'Moranguinho',
            'user' => $user,
        ]
    );
    }
}
