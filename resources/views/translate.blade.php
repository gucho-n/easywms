@extends('layouts.base')
@section('content')
<div class="translate-container">
    <div class="translate-title-container">
            <p class="translate-title">在庫移動</p>
    </div>
<div class="translate-main-container">

    <div class="translate-main-containts">
        <div class="translate-show-container">
          <div class="translate-show-container-title">
            <a>製品名</a><a>ケース数</a><a>ロケーション</a>
          </div>
          <div class="translate-show-container-main">
              <div class="translate-show-container-main-detail">
                <a>製品名</a><a>ケース数</a><a>ロケーション</a>
              </div>
          </div>
        </div>
        <p>ロケーションを指定</p>
            <form action="入力" class="translate-form">
                <input type="text" class="translate-input" placeholder="製品名">
            </form>
            <form action="入力" class="translate-form">
                <input type="text" class="translate-input" placeholder="ケース数">
            </form>
            <form action="入力" class="translate-form">
                <input type="text" class="translate-input" placeholder="ロケーション">
            </form>
            <input type="submit" class="submit-btn">

        <p>ロケーションを移動</p>
            <form action="入力" class="translate-form">
                <input type="text" class="translate-input" placeholder="製品名">
            </form>
            <form action="入力" class="translate-form">
                <input type="text" class="translate-input" placeholder="ケース数">
            </form>
            <form action="入力" class="translate-form">
                <input type="text" class="translate-input" placeholder="ロケーション">
            </form>
            <input type="submit" class="translate-submit-btn">
    </div>
  
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