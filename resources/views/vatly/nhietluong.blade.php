@extends('layouts.layout')

@section('content')
    <form action="nhietluong" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div>nhiệt lượng trong quá trình truyền nhiệt ở vật:</div>

        <a>Q=</a>
        <input type="number"name="a" style="width:90px" maxlength="3" placeholder="m" step="any" value="<?php if(isset($a)){ if(is_numeric($a)){echo $a;}else{false;} }else{false;} ?>">
        <a>*</a>
        <input type="number" name="b" style="width:90px" maxlength="3" placeholder="c" step="any" value="<?php if(isset($b)){ if(is_numeric($b)){echo $b;}else{false;} }else{false;} ?>">
        <a>*</a>
        <input type="number" name="c" style="width:90px" maxlength="3" placeholder="&#916;t" step="any" value="<?php if(isset($c)){ if(is_numeric($c)){echo $c;}else{false;} }else{false;} ?>">

        <button type="submit">=</button>
        <?php if(isset($ketqua)){echo $ketqua;}else{false;} ?>
        
    </form>
@endsection
