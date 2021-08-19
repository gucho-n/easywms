@extends('layouts.base')
@section('content')
<div class="translate-container">
    <div class="list-title-container">
        <p class="list-title">ピッキングリスト</p>
    </div>
    <div class="list-main-container">
        <div class="list-main-containts">
        @foreach($results as $result)
            <p>得意先</p>
                <li class="each-result">{{$result->shipto}}</li> 
                  <form action="入力" class="shipin-form"><input type="checkbox" class="list-input"></form>
                <p>製品名</p><p>{{$result->items}}</p>
            <form action="入力" class="list-form">
                <input type="checkbox" class="list-input">
            </form>
            <a>ケース数</a><a>{{$result->cases}}</a>
                <form action="入力" class="list-form">
                    <input type="checkbox" class="list-input">
                </form>
            <a>ロケーション</a><a>{{$result->locationfrom}}</a>
                <form action="入力" class="list-form">
                <input type="checkbox" class="list-input">
                </form>
                <input type="submit" class="list-btn">
        @endforeach
        </div>
    </div>
</div>
@endsection
