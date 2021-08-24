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
                
                    <p>{{$choosestock->stock->item}}</p>
                </div>    
                <div class="transport-show-container-main-detail">
                <p>{{$choosestock->stock->cases}}</p>
                </div>
                <div class="transport-show-container-main-detail">
                <p>{{$choosestock->stock->location}}</p>
                </div>
            @endforeach
            </div>
            
  
        </div>





        <p class="transport-focus-title">絞り込み</p>
            <form action="{{ route('transportchoose') }}" method="post">
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
            
            <form action="入力" class="transport-form">
                <input type="text" class="transport-input" placeholder="ロケーション"　name="tolocation">
            
            <div class="trasnport-form">
                <input type="text" class="transport-input" placeholder="ケース数"　name="tocases">
            </div>

            <div class="transport-decide-btn">
                <input type="submit" class="translate-submit-btn">
            </div>
    
            </form>
    </div>
</div>


@endsection