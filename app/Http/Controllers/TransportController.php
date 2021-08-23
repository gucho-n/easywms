<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

use Illuminate\Support\Facades\Auth;
class TransportController extends Controller
{
    public function index(Request $request)
    {   

        //モデル→変数→ビューへ
        $results = Stock::all();
        $users = auth()->user();

        return view ('transport', compact('results','users'));
        // return view ('shipin', ['items' => $items]);
    }
    public function show(Request $request)
    {   

        //モデル→変数→ビューへ
        $results = Stock::all();
        $users = auth()->user();
        
        foreach($results as $result){

            $chooseresult= $result['item'] ;
            dd($chooseresult);

        }
        
        

      
        return view ('transport', compact('results','users'));
        // return view ('shipin', ['items' => $items]);
    }
}
