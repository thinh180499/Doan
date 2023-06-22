@extends('layouts.layout')

@section('content')
    <form action="khoiluongrieng" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div>Khối lượng riêng:</div>
        <span style="display:inline-block;height:50px;vertical-align: middle">
            <a>D=</a>
        </span>
        <div style="display:inline-block;height:90px;vertical-align: middle">
            <span style="display:inline-block;padding: 0 5px 10px 5px;border-bottom: 2px solid #999">
                <input type="number" name="a" style="width:90px" maxlength="3" placeholder="m" step="any"
                    value="<?php if(isset($a)){ if(is_numeric($a)){echo $a;}else{false;} }else{false;} ?>">
            </span>
            <br>
            <span style="display:inline-block;padding: 10px 5px 0 5px">
                <input type="number" name="b" style="width:90px" maxlength="3" placeholder="V" step="any"
                    value="<?php if(isset($b)){ if(is_numeric($b)){echo $b;}else{false;} }else{false;} ?>">
            </span>

        </div>
        <span style="display:inline-block;height:50px;vertical-align: middle">
            <button type="submit">=</button>
        </span>
        <?php if(isset($ketqua)){echo $ketqua;}else{false;} ?>
    </form>
@endsection
