<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UserController extends Controller{
    public function showUser(User $user){
        return view('user',[
            'name' => 'Moranguinho',
            'user' => $user,
        ]
    );
    }
}
