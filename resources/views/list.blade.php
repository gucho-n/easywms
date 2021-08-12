@extends('layouts.app')
@section('content')

    <div class="title-container">
        <p class="shipin-title">ピッキングリスト</p>
    </div>
    <div class="main-container">
    <div class="main-containts">
        <a>得意先</a><a>得意先名が入る</a><a><form action="入力" class="shipin-form"><input type="checkbox" class="shipin-input"></form></a>
        <a>製品名</a><a>製品名が入る</a>
            <form action="入力" class="shipin-form">
                <input type="checkbox" class="shipin-input">
            </form>
        <a>ケース数</a><a>ケース数が入る</a>
            <form action="入力" class="shipin-form">
                <input type="checkbox" class="shipin-input">
            </form>
        <a>ロケーション</a><a>ロケーション</a>
            <form action="入力" class="shipin-form">
            <input type="checkbox" class="shipin-input">
            </form>
            <input type="submit" class="submit-btn">
    </div>
    
</div>

@endsection