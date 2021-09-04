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
        $user = auth()->user();

        return view ('transport', compact('results','user'));
        
    }
    public function create(Request $request)
    { 
 
        $request->validate(['chooselocation'=>'required']);
        $request->validate(['chooseitem'=>'required']);




        
        //ルール
        
        //モデル→変数→ビューへ

       
        $user = auth()->user();
       
        $nowstocks = Stock::all();
    
        $inputs = $request->all();

        $judge=0;
      
        foreach($nowstocks as $nowstock){ 
          
          
        if(($inputs["chooseitem"]==$nowstock["item"])&&($inputs["chooselocation"]==$nowstock["location"])){

            $inputs = array_merge($inputs,array('stock_id'=>$nowstock["id"]));
            Transport::create($inputs);  
            
            $choosestocks = Transport::all();


            return view ('/transportchoose', compact('choosestocks','user'));        
        }
                
        }
         if($judge=0){
      
         return redirect('/shipin');

        }


    }

        public function update(Request $request)
        {
            
            // バリデーションが
            // $request->validate(['item'=>'required']);
            // $request->validate(['cases'=>'required']);
            // $request->validate(['location'=>'required']);
            // $request->validate(['customer'=>'required']);
            
            $user = auth()->user();
            // 対象の在庫から、入力した数量の差を求めて、モデルに渡す, 最後にアップデート
            //入力した値
            $inputs = $request->all();

            $inputcases=$inputs['cases'];
            $inputlocation=$inputs['location'];
        

            $nowstocks = Stock::all();
   
            $choosestocks = Transport::all();

            $sum=0;

            $judge=0;

            $item="";

            foreach($choosestocks as $choosestock){
            
            $item=$choosestock["chooseitem"];

            $sum=$choosestock->Stock->cases-$inputcases;
                
            $choosestock->Stock->cases=$sum;

            $choosestock->Stock->Update(); 
           


            foreach($nowstocks as $nowstock){


                if(($choosestock->chooseitem==$nowstock['item'])&&($inputlocation==$nowstock['location'])){

                    $nowstock['cases']+= $inputcases;
                  
                    $nowstock->Update();
                    $judge=1;
                    break;
                }

               
            }

    
            $inputs = array_merge($inputs,array('item'=>$item,'inport_from'=>'不明','other'=>'不明'));
                if($judge==0){
                    Stock::create($inputs);
                }

                    Transport::destroy($choosestock["id"]);


                foreach($nowstocks as $nowstock){
                    if($nowstock['cases']==0){

                    Stock::destroy($nowstock["id"]);
                    
                    }
                }

                return redirect('/transport');

            }
           
            

            



            //
        }


}
