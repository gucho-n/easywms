@extends('layouts.base')
@section('content')
<div class="translate-container">
    <div class="translate-title-container">
            <p class="translate-title">在庫移動</p>
    </div>
<div class="translate-main-container">

    <div class="translate-main-containts">
        <div class="translate-show-container">
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
          @foreach($results as $result)
          <div class="translate-show-container-main">         
            <div class="translate-show-container-main-detail">
                <p>{{$result->location}}</p>
            </div>    
              <div class="translate-show-container-main-detail">
                <p>{{$result->item}}</p>
              </div>
              <div class="translate-show-container-main-detail">
                <p>{{$result->cases}}</p>
              </div>
          </div>
        @endforeach
        </div>
        <p>ロケーションを指定</p>
            <form action="入力" class="translate-form">
                <input type="text" class="translate-input" placeholder="ロケーション">
            </form>

            <form action="入力" class="translate-form">
                <input type="text" class="translate-input" placeholder="製品名">
            </form>
            <form action="入力" class="translate-form">
                <input type="text" class="translate-input" placeholder="ケース数">
            </form>
            <div class="decide-btn">
                <input type="submit" class="translate-submit-btn">
            </div>

        <p>ロケーションを移動</p>
            
            <form action="入力" class="translate-form">
                <input type="text" class="translate-input" placeholder="ロケーション">
            </form>

            <form action="入力" class="translate-form">
                <input type="text" class="translate-input" placeholder="製品名">
            </form>
            <form action="入力" class="translate-form">
                <input type="text" class="translate-input" placeholder="ケース数">
            </form>

            <div class="decide-btn">
                <input type="submit" class="translate-submit-btn">
            </div>
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