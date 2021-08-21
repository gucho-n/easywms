@extends('layouts.base')
@section('content')
<div class="shipout-main-container">
    <div class="shipout-title-container">
        <p class="shipout-title">出庫登録</p>
    </div>
    <div class="shipout-main-section">
        <div class="shipout-input-section">
            <div class="shipout-main-containts">
                <form  action="{{ route('shipoutStore') }}" method="post">
                        <p class=shipout-input-name>行き先</p>                    
                        <div class="shipout-form-container">
                            <input type="text" class="shipout-input-box" name="customer" placeholder="行き先を入力(必須)">
                        </div>
                    <p class=shipout-input-name>品目名</p>
                        <div class="shipout-form">
                             <input type="text" class="shipout-input-box" name="item" placeholder="品目名を入力(必須)">
                        </div>
                    <p class=shipout-input-name>ケース数</p>
                        <div class="shipout-form">
                            <input type="text" class="shipout-input-box" name="cases" placeholder="ケース数を入力(必須)">
                        </div>
                    <p class=shipout-input-name>ロケーション指定</p>
                        <div class="shipout--form">
                            <input type="text" class="shipout-input-box" name="location" placeholder="指定したいロケーションを入力(任意)">
                        </div>
                        <div class="shipout-submit-container">
                            <input type="submit" class="shipout-submit-btn" value="引当名作成">
                        </div>
                        @csrf
                </form>  
            </div>      
        </div>
        
        <div class="shipout-result-section">
            <p class="shipout-hikiate-title">引当準備一覧</p>     
        
            <ol class="shipout-result-container">
            @foreach($results as $result)
                <li class="shipout-each-result"><a href="" {{$result->customer}}</a></li>
                
            @endforeach       
            </ol>
       
            </div>   

        </div>
     
    </div>
    <form class="shipout-confirm-btn-container">
            <button class="shipout-confirm-btn"></button>
    </form>
</div>


@endsection




