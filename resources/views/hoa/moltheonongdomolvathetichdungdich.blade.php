@extends('layouts.layout')

@section('content')
    <form action="moltheonongdomolvathetichdungdich" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div>lực đẩy acsimet:</div>
        <a>F=</a>
        <input type="number" name="a" style="width:90px" placeholder="CM" maxlength="3" step="any" value="<?php if(isset($a)){ if(is_numeric($a)){echo $a;}else{false;} }else{false;} ?>">
        <a>*</a>
        <input type="number" name="b" style="width:90px" placeholder="Vdd" maxlength="3" step="any" value="<?php if(isset($b)){ if(is_numeric($b)){echo $b;}else{false;} }else{false;} ?>">
        <button type="submit">=</button>
        <?php if(isset($ketqua)){echo $ketqua;}else{false;} ?>
    </form>
@endsection
