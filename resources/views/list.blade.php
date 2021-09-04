@extends('layouts.base')
@section('content')
<div class="list-container">
    <div class="list-main-container">
    <p class="list-title">ピッキングリスト</p>
        @foreach($results as $result)
        <form action="{{ route('listdelete') }}" class="list-main-containts">
            <input type="hidden" name="finish_id" value="{{$result->id}}" />

        
            <p class="list-heading">得意先</p>
            <div class="list-each-category-container">
                <p class="each-result-shipto">{{$result->shipto}}</p>     
            </div>       
            <p class="list-heading">製品名</p>
            <div class="list-each-category-container">
                <p class="each-result-item">{{$result->items}}</p> 
               
            </div>    

            <p class="list-heading">ケース数</p>
            <div class="list-each-category-container">
                <p class="each-result-cases">{{$result->cases}}</p> 
                
            </div>    

            <p class="list-heading">ロケーション</p>
            <div class="list-each-category-container">
                <p class="each-result-location">{{$result->locationfrom}}</p> 
               
            </div>  

            <div class=list-all-push>
                <p>全てチェックしたら送信</p><input type="submit" class="list-input" value="送信" >
            </div>
        </form>
        @endforeach
    </div>
</div>
@endsection

