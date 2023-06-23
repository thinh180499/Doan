@extends('layouts.layout')

@section('content')
    <form action="dientichmatcau" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div>Tính diện tích mặt cầu:</div>
        <a>V=4*&pi;*</a>
        <input type="number" name="a" style="width:90px" placeholder="R" step="any" value="<?php if(isset($a)){ if(is_numeric($a)){echo $a;}else{false;} }else{false;} ?>">
        <button type="submit">=</button>
        <?php if(isset($ketqua)){echo $ketqua;}else{false;} ?>
       
    </form>
@endsection
