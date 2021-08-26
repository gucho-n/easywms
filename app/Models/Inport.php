<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inport extends Model
{
    use HasFactory;


    public function stock()
{
    return $this->hasMany('App\Models\Stock');
}
}

