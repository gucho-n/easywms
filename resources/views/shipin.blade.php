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
                    <input type="submit" class="submit-btn">
                </form>

                <!-- <p class=input-name>製品名</p>
                <form action="{{ route('store') }}" class="shipin-form">
                    <input type="text" class="shipin-input" name="item">
                </form>

                <p class=input-name>ケース数</p>
                <form action="{{ route('store') }}" class="shipin-form">
                    <input type="text" class="shipin-input" name="cases">
                </form>

                <p class=input-name>ロケーション</p>
                <form action="{{ route('store') }}" class="shipin-form">
                    <input type="text" class="shipin-input" name="location">
                </form>

                <p class=input-name>備考</p>
                <form action="{{ route('store') }}" class="shipin-form">
                    <input type="text" class="shipin-input" name="other">
                </form>
            <form class="submit-container" action="{{ route('store') }}" method="post">
            @csrf
                <input type="submit" class="submit-btn">
            </form> -->
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
