<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipout extends Model
{
    use HasFactory;
    protected $fillable = ['customer', 'item','cases','location'];

}
