@extends('layouts.layout')

@section('content')
    <form action="nongdomolmoltheonongdophantram" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div>Tính nồng độ phần trăm theo nông độ phần trăm</div>
        <a>CM=&#40 10*</a>
        <input type="number" name="a" style="width:90px"placeholder="C&#37" step="any" value="<?php if(isset($a)){ if(is_numeric($a)){echo $a;}else{false;} }else{false;} ?>">
        <a>*</a>
        <input type="number" name="b" style="width:90px" placeholder="D" step="any" value="<?php if(isset($b)){ if(is_numeric($b)){echo $b;}else{false;} }else{false;} ?>">
        <a>&#41;/</a>
        <input type="number" name="c" style="width:90px" placeholder="M" step="any" value="<?php if(isset($c)){ if(is_numeric($c)){echo $c;}else{false;} }else{false;} ?>">
         <button type="submit">=</button>
        <?php if(isset($ketqua)){echo $ketqua;}else{false;} ?>
       
    </form>
@endsection
