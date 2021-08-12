@extends('layouts.app')
@section('content')
<div class="title-container">
    <p class="shipin-title">ロケーション登録</p>
</div>
<div class="main-container">
    <div class="main-containts">
        <p>ロケーション番号</p>
            <form action="入力" class="shipin-form">
                <input type="text" class="shipin-input">
            </form>
        <p>備考</p>
            <form action="入力" class="shipin-form">
                <input type="text" class="shipin-input">
            </form>
            <input type="submit" class="submit-btn">
    </div>
   
</div>
@endsection