@extends('layouts.base')
@section('content')
<div class="shipout-main-container">
    <div class="shipout-title-container">
        <p class="shipout-shipin-title">出庫登録</p>
    </div>
    <div class="shipout-main-section">
        <div class="shipout-input-section">
            <div class="shipout-main-containts">
                <form  action="{{ route('shipoutStore') }}" method="post">
                    <p class=shipout-input-name>行き先</p>
                        <div class="shipout-form">
                            <input type="text" class="shipout-input" name="customer">
                        </div>
                    <p class=shipout-input-name>品目名</p>
                        <div class="shipout-form">
                             <input type="text" class="shipout-input" name="item">
                        </div>
                    <p class=shipout-input-name>ケース数</p>
                        <div class="shipout-form">
                            <input type="text" class="shipout-input" name="cases">
                        </div>
                    <p class=shipout-input-name>ロケーション指定</p>
                        <div class="shipout--form">
                            <input type="text" class="shipout-input" name="location">
                        </div>
                        <div class="shipout-submit-container">
                            <input type="submit" class="shipout-submit-btn">
                        </div>
                        @csrf
                </form>  
            </div>      
        </div>
        
        <div class="shipout-result-section">
            <p class="hikiate-title">引当</p>         
        @foreach($results as $result)
            <ul class="shipout-result-container">
                <li class="each-result">{{$result->customer}}</li>        
            </ul>
        @endforeach

        </div>
     
    </div>
    <form class="shipout-confirm-btn-container">
            <button class="shipout-confirm-btn"></button>
    </form>
</div>


@endsection


