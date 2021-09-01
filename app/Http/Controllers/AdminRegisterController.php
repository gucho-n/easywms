<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminRegisterController extends Controller
{
    //
    public function index(Request $request)
    {   
        //モデル→変数→ビューへ
        // $results = Shipout::all();
        
        $user = auth()->user();
       
        return view ('auth/register', compact('user'));
       
        // return view ('shipin', ['items' => $items]);
    }
}
