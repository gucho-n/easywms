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
        // return view ('shipin', ['items' => $items]);
    }
    public function create(Request $request)
    {   
        //モデル→変数→ビューへ

       
        $users = auth()->user();
       
        $nowstocks = Stock::all();
    
        $inputs = $request->all();
        
        foreach($nowstocks as $nowstock){ 
          
          
        if($inputs["chooseitem"]==$nowstock["item"]){

            $inputs = array_merge($inputs,array('stock_id'=>$nowstock["id"]));
            Transport::create($inputs);  
            
            $choosestocks = Transport::all();


            return view ('/transportchoose', compact('choosestocks','users'));        
        }
                  // if (($choosestock["chooselocation"]==$nowstock["location"])&&()){
                //     dd($nowstock["id"]);
                //     Transport::create($nowstock["id"]);
                //     return view ('transportchoose', compact('nowstock','users'));
                  
                // }else{
                //     print("失敗");
                // }
             
            
        }


    

        
        
        // foreach($nowstocks as $nowstock){ 

        // if ($choosestock["chooselocation"]==$nowstock["location"]) {
        //     $nowstock["cases"] = $nowstock["cases"] - $choosestock["cases"];
         
        // }           
            // dd($nowstock["location"]);




        // }
    }
}
