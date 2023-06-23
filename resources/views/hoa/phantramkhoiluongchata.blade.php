@extends('layouts.layout')

@section('content')
    <form action="phantramkhoiluongchata" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div>Tính phần trăm khối lượng chất a</div>
        <a>&#37;A=&#40;</a>
        <input type="number" name="a" style="width:90px"placeholder="mA" step="any" value="<?php if(isset($a)){ if(is_numeric($a)){echo $a;}else{false;} }else{false;} ?>">
        <a>/</a>
        <input type="number" name="b" style="width:90px" placeholder="mhh" step="any" value="<?php if(isset($b)){ if(is_numeric($b)){echo $b;}else{false;} }else{false;} ?>">
        <a>&#41;*100&#37;</a>
         <button type="submit">=</button>
        <?php if(isset($ketqua)){echo $ketqua;}else{false;} ?>
       
    </form>
@endsection
