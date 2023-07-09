<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Business;

class BusinessController extends Controller
{
    public function index(){
        $business = Business::create([
            'name' => 'Ammit',
            'email' => 'ammmit@gmail.com',
            'address' => 'Rua das flores, n° 10',

        ]);
        dd($business);
    }
}
