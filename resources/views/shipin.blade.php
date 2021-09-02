@extends('layouts.base')
@section('content')
<div class="shipin-main-container">
    <div class="shipin-title-container">
        <p class="shipin-title">入庫登録</p>
    </div>
    <div class="shipin-main-section">
        <div class="shipin-main-containts"> 
            @if($errors->any())
                @foreach($errors->all() as $error)
                <p class="error-msg">{{$error}} </p> 
                @endforeach
            @endif

              

                <form action="{{ route('store') }}" method="post">
                    
                    <div class="shipin-form-container">
                        <p class=shipin-input-name>入庫元</p>
                        
                        <input type="text" class="shipin-input-box" name="inport_from" placeholder="入庫元を入力（必須）" value="{{ old('inport_from') }}" >
                    </div>
                    <div class="shipin-input-name-container">
                       <p class=shipin-input-name>製品名</p>
                       <input type="text" class="shipin-input-box" name="item" placeholder="入庫する製品名を入力（必須）" value="{{ old('item') }}">
                    </div>
                    <div class="shipin-input-name-container">
                       <p class=shipin-input-name>ケース数</p>
                       <input type="text" class="shipin-input-box" name="cases" placeholder="入庫するケース数を入力（必須）" value="{{ old('cases') }}">
                    </div>
                    <div class="shipin-input-name-container">
                    <p class=shipin-input-name>ロケーション</p>
                        <input type="text" class="shipin-input-box" name="location" placeholder="格納したい製品のロケーションを入力（必須）" value="{{ old('location') }}">
                    </div>
                    <div class="shipin-input-name-container">
                    <p class=shipin-input-name>備考</p>   
                       <input list="shipin-other-detail" class="shipin-input-box" name="other" placeholder="その他注意事項があれば入力(任意)"value="{{ old('other') }}">
                    </div>
                    @csrf
                    <div class="shipin-input-submit-container">
                        <input type="submit" class="shipin-submit-btn"onClick="shipincconfirm()">
                    </div>

                    <datalist id="shipin-other-detail">
                        <option value="ワレモノ注意！！">
                        <option value="天地無用！！！">
                    
                    </datalist>
                   
                </form>

        </div>        
    </div>
</div>

    


@endsection


