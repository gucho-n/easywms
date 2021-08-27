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
        
    }
    public function create(Request $request)
    { 
        
        $request->validate(['item'=>'required']);
        $request->validate(['cases'=>'required']);
        $request->validate(['location'=>'required']);
        $request->validate(['customer'=>'required']);

        
        //ルール
        
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
            $request->validate(['item'=>'required']);
            $request->validate(['cases'=>'required']);
            $request->validate(['location'=>'required']);
            $request->validate(['customer'=>'required']);
            
            $users = auth()->user();
            // 対象の在庫から、入力した数量の差を求めて、モデルに渡す, 最後にアップデート
            //入力した値
            $inputs = $request->all();

            $nowstocks = Stock::all();
            
            //上で選択した値
            $choosestocks = Transport::all();

            
                
            foreach($choosestocks as $choosestock){
           
         
               $choosestock->Stock->cases = $choosestock->Stock->cases - $inputs["cases"];
               if($choosestock->Stock->cases==0){
                    Stock::destroy($choosestock->Stock->id);
               }
           
               $choosestock->Stock->Update();
               
               if(($choosestock->Stock->location == $inputs["location"])&&($choosestock->Stock->item == $inputs["item"])){
                
                $choosestock->Stock->cases = $choosestock->Stock->cases + $nowstock["cases"];
                
                $choosestock->Stock->cases->Update();
            
               }else{

                $inputs = array_merge($inputs,array('item'=>$choosestock["chooseitem"],'inport_from'=>"不明",'other'=>"不明"));
                
                Stock::create($inputs);         
               
            }


            Transport::destroy($choosestock["id"]);
            }
            
           
            return redirect('/transport');

            



            //
        }


}
