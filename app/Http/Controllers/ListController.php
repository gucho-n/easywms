<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResultList;
class ListController extends Controller
{
    public function index(Request $request){
        //モデル→変数→ビューへ
        $results = ResultList::all();
        

        return view ('list', compact('results'));
    }
}
