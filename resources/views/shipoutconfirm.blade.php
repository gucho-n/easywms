@extends('layouts.base')
@section('content')
<div class="shipoutlist-container">
    <div class="shipoutlist-main-container">
        @foreach($shipouts as $shipout)
        <div class="shipoutlist-main-containts">
        <div class="shipoutlist-title-container">
            <p class="shipoutlist-title">引当確認リスト</p>
        </div>

            <div class="shipoutlist-confirm-container">  
                <p class="shipoutlist-heading">得意先</p>
                <div class="shipoutlist-each-category-container">
                    <p class="shipoutlist-each-result">{{$shipouts->customer}}</p> 
                </div>     
                <p class="shipoutlist-heading">製品名</p>
                <div class="shipoutlist-each-category-container">
                    <p class="shipputlist-each-result">{{$shipouts->item}}</p>
                </div>    

                <p class="shipoutlist-heading">ケース数</p>
                <div class="shipoutlist-each-category-container">
                    <p class="shipoutlist-each-result">{{$shipouts->cases}}</p> 
                </div> 
            </div>   

            <div class=list-all-push>
                <p>引当開始</p>
                <form action="入力" class="shipin-form"><input type="button" class="list-input" value="送信"></form><p>
            </div>

            <div class=list-all-push>
                <p>引き戻し作業</p>
                <form action="入力" class="shipin-form"><input type="button" class="list-input" value="送信"></form><p>
            </div>

        @endforeach

        </div>
    </div>
</div>
@endsection
