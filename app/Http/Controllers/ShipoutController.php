<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipout;
use App\Models\Stock;
use App\Models\ResultList;
use Illuminate\Support\Facades\Auth; //追加

use Validator; // Validatorだけでも実行できる
class ShipoutController extends Controller
{
    public function index(Request $request)
    {   
        //モデル→変数→ビューへ
        $results = Shipout::all();
        
        $user = auth()->user();
       
        return view ('shipout', compact('results','user'));
       
        // return view ('shipin', ['items' => $items]);
    }

    public function create(Request $request)
    {   

        $request->validate(['item'=>'required']);
        $request->validate(['cases'=>'required']);
        $request->validate(['location'=>'required']);
        //ルール
        
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
        public function show(Request $request)
        {   
            $request->all();
            $shipout = Shipout::find($request->id);
            
            $user = auth()->user();
    
            return view ('shipoutconfirm', compact('shipout','user','request'));
        
            
        
            
        }

    
    //データを渡して保存
    public function update(Request $request)
    {  
            $shipout = Shipout::find($request->shipout_id);
       
            $shipoutcases = $shipout["cases"];

            $stocks = Stock::all();
        
            $judgeitem = 0;
            
            foreach($stocks as $stock){
                $judgeitem = $judgeitem + $stock["cases"];
            }

        
            if($judgeitem<$shipoutcases){
                return redirect('/shipout');  
            }
      

        foreach($stocks as $stock){
           
     
            if ($stock["item"]==$shipout["item"]){
                
                if(($stock["cases"]-$shipoutcases)>=0){
             
                $stock["cases"] = $stock["cases"] - $shipoutcases;
                    
               
                $stock->Update();

                
                $inputs=array('cases'=>$shipoutcases,'locationfrom'=>$stock["location"],'shipto'=>$shipout["customer"],'items'=>$shipout["item"],'shipout_id'=>$shipout["id"]);

                
                ResultList::create($inputs);
                return redirect('/shipin');
                Shipout::destroy($shipout->id);
                //ここからは0cs以下だったときの処理を書くこと

                break;
                }elseif($stock["cases"]-$shipoutcases<0){
                    
                    $inputs=array('cases'=>$stock["cases"],'locationfrom'=>$stock["location"],'shipto'=>$shipout["customer"],'items'=>$shipout["item"],'shipout_id'=>$shipout["id"]);
                    ResultList::create($inputs);
                    $shipoutcases =  $shipoutcases - $stock["cases"];
                    $stock["cases"] = 0;
                    $stock->Update();
                    // Shipout::destroy($shipout->id);
                }

            }
            
            
       
        }

    }

    









}
