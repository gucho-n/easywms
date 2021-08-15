@extends('layouts.base')
@section('content')
<div class="translate-container">
    <div class="list-title-container">
        <p class="list-title">ピッキングリスト</p>
    </div>
    <div class="list-main-container">
        <div class="list-main-containts">
            <a>得意先</a><a>得意先名が入る</a><a><form action="入力" class="shipin-form"><input type="checkbox" class="list-input"></form></a>
                <a>製品名</a><a>製品名が入る</a>
            <form action="入力" class="list-form">
                <input type="checkbox" class="list-input">
            </form>
            <a>ケース数</a><a>ケース数が入る</a>
                <form action="入力" class="list-form">
                    <input type="checkbox" class="list-input">
                </form>
            <a>ロケーション</a><a>ロケーション</a>
                <form action="入力" class="list-form">
                <input type="checkbox" class="list-input">
                </form>
                <input type="submit" class="list-btn">
        </div>
    </div>
</div>

@endsection