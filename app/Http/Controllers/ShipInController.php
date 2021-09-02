<?php

namespace App\Http\Controllers;

//モデルとの紐付け↓例）App\Models\Stock、Stockまでのパスを記述すること
use App\Models\Stock;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator; // Validatorだけでも実行できる


class ShipInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //requestを入力
    public function index(Request $request)
    {   
        //モデル→変数→ビューへ
        $items = Stock::all();

        $user = auth()->user();
           
        return view ('shipin', compact('items','user'));
        

        // return view ('shipin', ['items' => $items]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        $request->old('item');
        $request->old('cases');
        $request->old('location');
        

        $request->validate(['item'=>'required']);
        $request->validate(['cases'=>'required']);
        $request->validate(['location'=>'required']);
        //ルール
        
      
        $items = Stock::all();
       
        
        $inputs = $request->all();

        $dainyu = $inputs["location"];


        $judge=0;
        // ここに入れよう

        foreach($items as $item){

            if(($item["item"] == $inputs["item"]) && ($item["location"] == $dainyu)){
                $item["cases"] = $item["cases"] + $inputs["cases"];
                $item->cases = $item["cases"];
                $item->save(); 
                $judge+=1;  
                return redirect('/shipin');
            }
            
        }

        if($judge==0){
            Stock::create($inputs);
        }


        // \Session::flash('err_meg','入庫完了');
        return redirect('/shipin');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
