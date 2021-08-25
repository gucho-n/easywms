<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Transport;

use Illuminate\Support\Facades\Auth;
class TransportController extends Controller
{
    public function index(Request $request)
    {   

        //モデル→変数→ビューへ
        $results = Stock::all();
        $users = auth()->user();

        return view ('transport', compact('results','users'));
        return view ('shipin', ['items' => $items]);
    }
    public function create(Request $request)
    {   
        //モデル→変数→ビューへ

       
        $users = auth()->user();
       
        $nowstocks = Stock::all();
    
        $inputs = $request->all();
      
        foreach($nowstocks as $nowstock){ 
          
          
        if(($inputs["chooseitem"]==$nowstock["item"])&&($inputs["chooselocation"]==$nowstock["location"])){

            $inputs = array_merge($inputs,array('stock_id'=>$nowstock["id"]));
            Transport::create($inputs);  
            
            $choosestocks = Transport::all();


            return view ('/transportchoose', compact('choosestocks','users'));        
        }else{
            // return redirect('/transport');
        }
                  // if (($choosestock["chooselocation"]==$nowstock["location"])&&()){
                //     dd($nowstock["id"]);
                //     Transport::create($nowstock["id"]);
                //     return view ('transportchoose', compact('nowstock','users'));
                  
                // }else{
                //     print("失敗");
                // }
             
            
        }


    }

        public function update(Request $request)
        {
            $users = auth()->user();
            // 対象の在庫から、入力した数量の差を求めて、モデルに渡す, 最後にアップデート
            //入力した値
            $inputs = $request->all();

            $nowstocks = Stock::all();
            
            //上で選択した値
            $choosestocks = Transport::all();

            
                
            foreach($choosestocks as $choosestock){
           
         
               $choosestock->Stock->cases = $choosestock->Stock->cases - $inputs["tocases"];
           
               $choosestock->Stock->Update();
               
               if(($choosestock->Stock->location == $inputs["tolocation"])&&($choosestock->Stock->item == $inputs["tolocation"])){
                
                $choosestock->Stock->cases = $choosestock->Stock->cases + $nowstock["cases"];
                
                $choosestock->Stock->cases->Update();
                Transport::query()->delete();
                
               }

            
            }
            return redirect('/transport');

            



            //
        }


}
