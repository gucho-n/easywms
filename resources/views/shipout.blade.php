@extends('layouts.base')
@section('content')
<div class="shipout-main-container">
    <div class="shipout-title-container">
        <p class="shipout-shipin-title">出庫登録</p>
    </div>
    <div class="shipout-main-section">
        <div class="shipout-input-section">
            <div class="shipout-main-containts">
                <p class=shipout-input-name>入庫元</p>
                    <form action="入力" class="shipout-form">
                        <input type="text" class="shipout-input">
                    </form>
                    <p class=shipout-input-name>行き先</p>
                    <form action="入力" class="shipout-form">
                            <input type="text" class="shipout-input">
                    </form>
                    <p class=shipout-input-name>ケース数</p>
                    <form action="入力" class="shipout-form">
                            <input type="text" class="shipout-input">
                    </form>
                    <p class=shipout-input-name>ロケーション指定</p>
                    <form action="入力" class="shipout--form">
                        <input type="text" class="shipout-input">
                    </form>
                <form action="" class="shipout-submit-container">
                    <input type="submit" class="shipout-submit-btn">
                </form>
            </div>        
        </div>
        <div class="shipout-result-section">
            <p>引当</p>
        </div>
    </div>
    <form class="shipout-confirm-btn-container">
            <button class="shipout-confirm-btn"></button>
    </form>
</div>
@endsection

