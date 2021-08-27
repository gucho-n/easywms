@extends('layouts.base')
@section('content')
<div class="transport-container">
    <div class="transport-title-container">
        <p class="transport-title">在庫移動</p>
    </div>
    <div class="transport-main-container">   
        <div class="transport-show-container">
            <div class="transport-show-container-title">
                <div class=transport-product-title>
                    <p>製品名</p>
                </div>
                <div class=transport-product-title>
                    <p>ケース数</p>
                </div> 
                <div class=transport-product-title> 
                    <p>ロケーション</p>
                </div> 
            </div>
           
            <div class="transport-show-container-main"> 
            @foreach($choosestocks as $choosestock)        
                    <div class="transport-show-container-main-detail">
                        <p>{{$choosestock->stock->location}}</p>
                    </div>    
                    <div class="transport-show-container-main-detail">
                        <p>{{$choosestock->stock->item}}</p>
                    </div>
                    <div class="transport-show-container-main-detail">
                        <p>{{$choosestock->stock->cases}}</p>
                     </div>
            @endforeach
            </div>
            
  
        </div>

        <!-- @if($errors->any())
                @foreach($errors->all() as $error)
                <p class="error-msg">{{$error}} </p> 
                @endforeach
            @endif -->


        <p class="transport-focus-title">絞り込み</p>
            <form action="{{ route('transportchoose') }} "method="post">
                <div class="trasnport-form">
                    <input type="text" class="transport-input" placeholder="ロケーション" name="chooselocation">
                </div>

                <div class="trasnport-form">
                    <input type="text" class="transport-input" placeholder="製品名" name="chooseitem">
                </div>
                <div class="transport-decide-btn">
                    <input type="submit" class="transport-submit-btn">
                </div>
                @csrf
            </form>


        <p class="transport-focus-title">移動先</p>
            
                <form action="{{ route('transportdecide') }}" class="transport-form" method="post">
                    <input type="text" class="transport-input" placeholder="ロケーション" name="location">
                
                <div class="trasnport-form">
                    <input type="text" class="transport-input" placeholder="ケース数" name="cases">
                </div>

                <div class="transport-decide-btn">
                    <input type="submit" class="translate-submit-btn">
                </div>
            @csrf
            </form>
    </div>
</div>


@endsection