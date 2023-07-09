<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Business;

class BusinessController extends Controller
{
    public function index(){

        $input = [
            'name' => 'Ammit2',
            'email' => 'ammit2@gmail.com',
            'address' => 'Rua das amoras doces, n°4'
        ];

        $business = Business::find(5);
        $business->fill($input);
        $business->save();



        // ->update([
        //     'name' => 'Ammit',
        //     'email' => 'ammit@gmail.com',
        //     'address' => 'Rua das flores vermelhas, n°10'
        // ]);


        // $business->name = 'Moranguinho org';
        // $business->email = 'morango@gmail.com';
        // $business->address = 'Rua amoras doces, n°10';
        // $business->save();
        dd($business);
    }
}
