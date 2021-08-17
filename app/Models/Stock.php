<?php
//laravelではデータベースの紐付けはモデル名＋複数形でOK
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = ['item', 'cases','location','inport_from','other'];
}
