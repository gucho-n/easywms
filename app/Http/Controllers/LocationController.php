<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

use Illuminate\Support\Facades\Auth;

class LocationController extends Controller
{
    public function index(Request $request)
    {   

        //モデル→変数→ビューへ
        $results = Location::all();
        $user = auth()->user();
        return view ('location', compact('results','user'));
       
    }

    public function create(Request $request)
    {   
         //モデル→変数→ビューへ
        $inputs=$request->all();
        Location::create($inputs);
        $user = auth()->user();
        return view ('location', compact('user'));
       
    }









}
