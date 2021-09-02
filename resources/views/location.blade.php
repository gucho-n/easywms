@extends('layouts.base')
@section('content')
<div class="location-container">
    <div class="location-title-container">
        <p class="location-title">ロケーション登録</p>
    </div>
    <div class="location-main-container">
    <form action="{{ route('locationResister') }}" class="location-form" method="POST">
        @csrf
            <p>ロケーション番号</p>               
                    <input type="text" class="location-input" name="location" placeholder="例）1-1-1">

            <p>備考</p>
            
                    <input type="text" class="location-input" name="other" placeholder="狭い">
        
    
            <div class="location-submit-container">
                <input type="submit" class="location-submit-btn" value="登録">
            </div>
    </form>
    </div>
</div>
@endsection
