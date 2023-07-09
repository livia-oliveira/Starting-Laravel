<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Business;

class BusinessController extends Controller
{
    public function index(){
    //   $businesses = Business::all();
    //   dd($businesses);

    // $business = Business::find(1);
    // dd($business);

    $businessWhere = Business::where('name', 'Heathcote and Sons')->get();

    $businessWhereFirst = Business::where('name', 'Heathcote and Sons')->first();

    dd($businessWhere, $businessWhereFirst);
    }
}
