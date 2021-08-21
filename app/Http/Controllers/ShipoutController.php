<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipout;
use Illuminate\Support\Facades\Auth; //追加
class ShipoutController extends Controller
{
    public function index(Request $request)
    {   

        //モデル→変数→ビューへ
        $results = Shipout::all();
        
        $users = auth()->user();
       

   
        return view ('shipout', compact('results','users'));
       
        

        // return view ('shipin', ['items' => $items]);
    }

    public function create(Request $request)
    {   
        $inputs = $request->all();
        Shipout::create($inputs);
        
    
        \Session::flash('err_meg','');
        return redirect('/shipout');
    }
    //データを渡して保存
    public function update(Request $request)
    {   
        $inputs = $request->all();
        Shipout::create($inputs);
        
    
        \Session::flash('err_meg','');
        return redirect('/shipout');
    }

    









}
