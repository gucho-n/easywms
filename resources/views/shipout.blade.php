@extends('layouts.app')
@section('content')
<div class="title-container">
    <p class="shipin-title">出庫引当</p>
</div>
<div class="main-container">
    <div class="main-containts">
        <p>行き先</p>
            <form action="入力" class="shipin-form">
                <input type="text" class="shipin-input">
            </form>
        <p>製品名</p>
            <form action="入力" class="shipin-form">
                    <input type="text" class="shipin-input">
            </form>
        <p>ケース数</p>
            <form action="入力" class="shipin-form">
                    <input type="text" class="shipin-input">
            </form>
        <p>ロケーションを指定</p>
            <form action="入力" class="shipin-form">
                <input type="text" class="shipin-input">
            </form>
        <input type="submit" class="submit-btn">
    </div>
    
</div>
<!-- <style>

.main-container{
    text-align: center;
}
.title-container{
    text-align: center;
}
.main-containets{
    text-align: center;
}

</style> -->
@endsection