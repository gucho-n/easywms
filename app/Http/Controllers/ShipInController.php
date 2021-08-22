<?php

namespace App\Http\Controllers;

//モデルとの紐付け↓例）App\Models\Stock、Stockまでのパスを記述すること
use App\Models\Stock;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $users = auth()->user();
        
    
        return view ('shipin', compact('items','users'));


        // return view ('shipin', ['items' => $items]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        $items = Stock::all();
       
        $inputs = $request->all();

        
        // dd($inputs["item"]);



        // ここに入れよう

        foreach($items as $item){

            
           
            if(($item["item"] == $inputs["item"]) && ($item["location"] == $inputs["location"])){
                $item["cases"] = $item["cases"] + $inputs["cases"];
                print($item["cases"]);
                $item->Update();
            }else{
             
                Stock::create($inputs);
            
            }
      

        }



        // これは一旦置いとく
        // foreach($items as $item){
        //     if ($item->item == $inputs->item && $item->location == $inputs->location){
        //         \DB::table('stock')
        //             ->where('id', $item)
        //             ->update([
        //             'cases' => ($item->cases)+($inputs->cases)
        //          ]);
        //     }else{
        //             // if($inputs['item']==)
        //         Stock::create($inputs);
        //     }
        // }

    
     

        \Session::flash('err_meg','入庫完了');
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
