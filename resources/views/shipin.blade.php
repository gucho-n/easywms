@extends('layouts.base')
@section('content')
<div class="main-container">
    <div class="title-container">
        <p class="shipin-title">入庫登録</p>
    </div>
    <div class="main-section">
        <div class="main-containts">
            
                <form action="{{ route('store') }}" method="post" class="shipin-form">
                    
                    <div class="shipin-form">
                        <p class=input-name>入庫元</p>
                        <input type="text" class="shipin-input" name="inport_from">
                    </div>
                    <div class="shipin-form">
                       <p class=input-name>製品名</p>
                       <input type="text" class="shipin-input" name="item">
                    </div>
                    <div class="shipin-form">
                       <p class=input-name>ケース数</p>
                       <input type="text" class="shipin-input" name="cases">
                    </div>
                    <div class="shipin-form">
                    <p class=input-name>ロケーション</p>
                        <input type="text" class="shipin-input" name="location">
                    </div>
                    <div class="shipin-form">
                    <p class=input-name>備考</p>
                       <input type="text" class="shipin-input" name="other">
                    </div>
                    @csrf
                    <div class="shipout-submit-container">
                        <input type="submit" class="submit-btn">
                    </div>
                   
                </form>

        </div>        
    </div>
</div>
@foreach($items as $item)
<tr>
<!-- <th>{{$item->id}}</th>
<th>{{$item->item}}</th>
<th>{{$item->location}}</th> -->
</tr>
@endforeach
    


@endsection
