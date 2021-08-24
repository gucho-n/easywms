<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;

    protected $fillable = ['chooselocation','chooseitem','stock_id'];

    /**
     * ユーザーに関連する電話レコードを取得
     */
    public function stock()
    {
        return $this->belongsTo('App\Models\Stock');
       
     
    }


    

}


