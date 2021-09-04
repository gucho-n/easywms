@extends('layouts.base')
@section('content')

<div class="shipout-confirm-container">

<form action= "{{ route('shipoutDeside') }}" method="post" class="shipout-form-container">
<input type="hidden" name="shipout_id" value="{{$shipout->id}}" />
    <p class="shipout-confirm-title">確認リスト</p>
    <ul class="shipout-confirm-main-container">
        <li class="shipout-confirm-customer">行き先:{{$shipout->customer}}</li>
        <li class="shipout-confirm-item">製品名:{{$shipout->item}}</li>
        <li class="shipout-confirm-cases">ケース数:{{$shipout->cases}}</li>
        <!-- <li class="shipout-confirm-location">ロケーション{{$shipout->location}}</li> -->
    <input type="submit" value="確定" class="shipout-confirm-submit" onClick="shipoutconfirm()">
    @csrf

</ul>

</form>
                    
                    
                    



</div>  

@endsection