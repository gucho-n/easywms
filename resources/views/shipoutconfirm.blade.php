@extends('layouts.base')
@section('content')





<form action= "{{ route('shipoutDeside') }}" method="post">
<input type="hidden" name="shipout_id" value="{{$shipout->id}}" />
<div class="shipout-confirm-container">
    <p class="shipout-confirm-title">確認リスト</p>
    <div class="shipout-confirm-main-container">
        <p class="shipout-confirm-item">確認リスト</p>
        <p class="shipout-confirm-">確認リスト</p>
        <p class="shipout-confirm-title">確認リスト</p>
        <p class="shipout-confirm-title">確認リスト</p>
    <input type="submit" value="確定">
    @csrf

    </div>

</form>
                    
                    
                    



</div>  

@endsection