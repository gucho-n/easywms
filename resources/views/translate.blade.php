@extends('layouts.app')
@section('content')

<div class="title-container">
        <p class="shipin-title">在庫移動</p>
</div>
<div class="main-container">

    <div class="main-containts">
        <div class="show-container">
            <a>製品名</a><a>ケース数</a><a>ロケーション</a></br>
            <a>製品名</a><a>ケース数</a><a>ロケーション</a>
        </div>
        <p>ロケーションを指定</p>
            <form action="入力" class="shipin-form">
                <input type="text" class="shipin-input" placeholder="製品名">
            </form>
            <form action="入力" class="shipin-form">
                <input type="text" class="shipin-input" placeholder="ケース数">
            </form>
            <form action="入力" class="shipin-form">
                <input type="text" class="shipin-input" placeholder="ロケーション">
            </form>
            <input type="submit" class="submit-btn">

        <p>ロケーションを移動</p>
            <form action="入力" class="shipin-form">
                <input type="text" class="shipin-input" placeholder="製品名">
            </form>
            <form action="入力" class="shipin-form">
                <input type="text" class="shipin-input" placeholder="ケース数">
            </form>
            <form action="入力" class="shipin-form">
                <input type="text" class="shipin-input" placeholder="ロケーション">
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