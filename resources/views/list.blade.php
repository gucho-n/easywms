@extends('layouts.base')
@section('content')
<div class="list-container">
    <div class="list-main-container">
        @foreach($results as $result)
        <div class="list-main-containts">
        <div class="list-title-container">
            <p class="list-title">ピッキングリスト</p>
        </div>
        
            <p class="list-heading">得意先</p>
            <div class="list-each-category-container">
                <p class="each-result">{{$result->shipto}}</p> 
                <form action="入力" class="shipin-form"><input type="checkbox" class="list-input"></form><p>ピッキングしたらチェック</p>
            </div>     
            
            <p class="list-heading">製品名</p>
            <div class="list-each-category-container">
                <p class="each-result">{{$result->items}}</p> 
                <form action="入力" class="shipin-form"><input type="checkbox" class="list-input"></form><p>ピッキングしたらチェック</p>
            </div>    

            <p class="list-heading">ケース数</p>
            <div class="list-each-category-container">
                <p class="each-result">{{$result->cases}}</p> 
                <form action="入力" class="shipin-form"><input type="checkbox" class="list-input"></form><p>ピッキングしたらチェック</p>
            </div>    

            <p class="list-heading">ロケーション</p>
            <div class="list-each-category-container">
                <p class="each-result">{{$result->locationfrom}}</p> 
                <form action="入力" class="shipin-form"><input type="checkbox" class="list-input"></form><p>ピッキングしたらチェック</p>
            </div>  

            <div class=list-all-push>
                <p>全てチェックしたら送信</p>
                <form action="入力" class="shipin-form"><input type="button" class="list-input" value="送信"></form><p>
            </div>

        @endforeach

        </div>
    </div>
</div>
@endsection

