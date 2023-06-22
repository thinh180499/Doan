@extends('layouts.layout')

@section('content')
    <form action="congsuathaophi" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        </span>
        <div>công suất hao phí:</div>
        <span style="display:inline-block;height:50px;vertical-align: middle">
            <a>P(hp)=</a>
        </span>
        <div style="display:inline-block;height:90px;vertical-align: middle">
            <span style="display:inline-block;padding: 0 5px 10px 5px;border-bottom: 2px solid #999">
                <input type="number" name="a" style="width:90px" maxlength="3" placeholder="R"
                    value="<?php if(isset($a)){ if(is_numeric($a)){echo $a;}else{false;} }else{false;} ?>">* 
                <input type="number" name="b" style="width:30px"
                    maxlength="3" placeholder="P" value="<?php if(isset($b)){ if(is_numeric($b)){echo $b;}else{false;} }else{false;} ?>">2
            </span>
            <br>
            <span style="display:inline-block;padding: 10px 5px 0 5px">
                <input type="number" name="c" style="width:90px" maxlength="3" placeholder="U"
                    value="<?php if(isset($b)){ if(is_numeric($b)){echo $b;}else{false;} }else{false;} ?>">2
            </span>

        </div>
        <span style="display:inline-block;height:50px;vertical-align: middle">
        <button type="submit">=</button>
        </span>
        <?php if(isset($ketqua)){echo $ketqua;}else{false;} ?>
    </form>
@endsection
