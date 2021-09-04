<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipout extends Model
{
    use HasFactory;
    protected $fillable = ['customer', 'item','cases','location'];


    public function stock()
    {
      return $this->belongsToMany('App\Models\Stock');
    }

    public function resultlist()
    {
  
        return $this->belongsTo('App\Models\Resultlist');
    }

}

