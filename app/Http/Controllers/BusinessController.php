<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Business;

class BusinessController extends Controller
{
    public function index(){

        $business = Business::find(2);
        //  $business->delete();
        dd($business->toSql());




        // ->update([
        //     'name' => 'Ammit',
        //     'email' => 'ammit@gmail.com',
        //     'address' => 'Rua das flores vermelhas, n°10'
        // ]);


        // $business->name = 'Moranguinho org';
        // $business->email = 'morango@gmail.com';
        // $business->address = 'Rua amoras doces, n°10';
        // $business->save();

    }
}
