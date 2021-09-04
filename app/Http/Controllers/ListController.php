<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResultList;
use App\Models\Shipout;
use Illuminate\Support\Facades\Auth;

class ListController extends Controller


{
    public function index(Request $request){
        //モデル→変数→ビューへ
        $results = ResultList::all();
        
        $user = auth()->user();

        return view ('list', compact('results','user'));
    }

    public function delete(Request $request){
        //モデル→変数→ビューへ
        $user = auth()->user();
        $finish = Shipout::find($request->finish_id);
        ResultList::destroy($finish["id"]);
        return redirect('/list');
    }


}
