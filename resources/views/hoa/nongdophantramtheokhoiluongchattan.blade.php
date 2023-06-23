@extends('layouts.layout')

@section('content')
    <form action="nongdophantramtheokhoiluongchattan" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div>Tính nồng độ mol theo khối lượng chất tan</div>
        <a>C&#37=&#40;</a>
        <input type="number" name="a" style="width:90px"placeholder="mct" step="any" value="<?php if(isset($a)){ if(is_numeric($a)){echo $a;}else{false;} }else{false;} ?>">
        <a>*/100&#37;&#41;/</a>
        <input type="number" name="b" style="width:90px" placeholder="mdd" step="any" value="<?php if(isset($b)){ if(is_numeric($b)){echo $b;}else{false;} }else{false;} ?>">
        <a></a>
         <button type="submit">=</button>
        <?php if(isset($ketqua)){echo $ketqua;}else{false;} ?>
       
    </form>
@endsection
