<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
class TransportController extends Controller
{
    public function index(Request $request)
    {   

        //モデル→変数→ビューへ
        $results = Stock::all();
        
        return view ('transport', compact('results'));
        
        

        // return view ('shipin', ['items' => $items]);
    }
}
