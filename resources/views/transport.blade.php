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
                    <p>ロケーション</p>
                </div> 
                <div class=transport-product-title>
                    <p>製品名</p>
                </div>
                <div class=transport-product-title>
                    <p>ケース数</p>
                </div> 

            </div>
        @foreach($results as $result)
            <div class="transport-show-container-main"> 
                <div class="transport-show-container-main-detail">
                    <p>{{$result->location}}</p>
                </div>          
  
                <div class="transport-show-container-main-detail">
                    <p>{{$result->item}}</p>
                </div>
                <div class="transport-show-container-main-detail">
                    <p>{{$result->cases}}</p>
                </div>

            </div>
        @endforeach
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

    
    </div>
</div>


@endsection