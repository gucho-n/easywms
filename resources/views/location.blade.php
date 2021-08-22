@extends('layouts.base')
@section('content')
<div class="location-container">
    <div class="location-title-container">
        <p class="location-title">ロケーション登録</p>
    </div>
    <div class="location-main-container">
    <form action="入力" class="location-form">
            <p>ロケーション番号</p>               
                    <input type="text" class="location-input" placeholder="例）1-1-1">

            <p>備考</p>
            
                    <input type="text" class="location-input" placeholder="狭い">
        
    
            <div class="location-submit-container">
                <input type="submit" class="location-submit-btn" value="登録">
            </div>
    </form>
    </div>
</div>
@endsection
