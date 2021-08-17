@extends('layouts.base')
@section('content')
<div class="main-container">
    <div class="title-container">
        <p class="shipin-title">入庫登録</p>
    </div>
    <div class="main-section">
        <div class="main-containts">
            <p class=input-name>入庫元</p>
                <form action="入力" class="shipin-form">
                    <input type="text" class="shipin-input">
                </form>
                <p class=input-name>製品名</p>
                <form action="入力" class="shipin-form">
                        <input type="text" class="shipin-input">
                </form>
                <p class=input-name>ケース数</p>
                <form action="入力" class="shipin-form">
                        <input type="text" class="shipin-input">
                </form>
                <p class=input-name>備考</p>
                <form action="入力" class="shipin-form">
                    <input type="text" class="shipin-input">
                </form>
            <form action="" class="submit-container">
                <input type="submit" class="submit-btn">
            </form>
        </div>        
    </div>
</div>
@foreach($items as $item)
<tr>
<th>{{$item->id}}</th>
<th>{{$item->item}}</th>
<th>{{$item->location}}</th>
</tr>
@endforeach
    




@endsection
