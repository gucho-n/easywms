<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultList extends Model
{
    use HasFactory;

    protected $fillable = ['shipto', 'cases','items','locationfrom'];

    // public function shipout()
    // {
    //     return $this->hasOne('App\Models\Shipout');
    // }
}
