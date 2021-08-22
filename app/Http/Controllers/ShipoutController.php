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
      
        if($inputs['customer']==null || $inputs['item']==null || $inputs['cases']==null || $inputs['location']==null){
            return redirect('/shipout')->with('flash_message', '入力フォームを入れてください');
            \Session::flash('err_meg','');

            
        }else{
            Shipout::create($inputs);
        };
       
        
    
     
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
