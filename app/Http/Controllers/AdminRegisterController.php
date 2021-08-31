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
        
        $users = auth()->user();
       
        return view ('auth/register', compact('users'));
       
        // return view ('shipin', ['items' => $items]);
    }
}
