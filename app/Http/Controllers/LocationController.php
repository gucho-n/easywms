<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Location;

class LocationController extends Controller
{
    public function index(Request $request)
    {   

        //モデル→変数→ビューへ
        $results = Location::all();
   
        return view ('location', compact('results'));
       
    }









}
