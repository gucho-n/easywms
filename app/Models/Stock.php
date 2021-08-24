<?php
//laravelではデータベースの紐付けはモデル名＋複数形でOK
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = ['item', 'cases','location','inport_from','other'];

    protected function rules(){
        return [
            'inport_from'     => 'string','required',
            'item' => 'string','required',
            'cases' => 'integer','required',
            'location'     => 'string','required',
            
        ];
    }
    /**
     * ユーザーに関連する電話レコードを取得
     */
    public function stock()
    {
        return $this->hasOne('App\Models\Transport');
    }





}
