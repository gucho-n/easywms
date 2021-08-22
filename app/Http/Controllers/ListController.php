<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResultList;

use Illuminate\Support\Facades\Auth;

class ListController extends Controller


{
    public function index(Request $request){
        //モデル→変数→ビューへ
        $results = ResultList::all();
        
        $users = auth()->user();

        return view ('list', compact('results','users'));
    }
}
