@extends('layouts.layout')

@section('content')
    <form action="khoiluongrieng" method="post">
        <div>Khối lượng riêng:</div>
        <span style="display:inline-block;height:50px;vertical-align: middle">
            <a>D=</a>
        </span>
        <div style="display:inline-block;height:90px;vertical-align: middle">
            <span style="display:inline-block;padding: 0 5px 10px 5px;border-bottom: 2px solid #999">
                <input type="number" name="a" style="width:90px" maxlength="3" placeholder="m"
                    value="{{ !empty($a) ? $a : false }}">
            </span>
            <br>
            <span style="display:inline-block;padding: 10px 5px 0 5px">
                <input type="number" name="b" style="width:90px" maxlength="3" placeholder="V"
                    value="{{ !empty($b) ? $b : false }}">
            </span>

        </div>
        <span style="display:inline-block;height:50px;vertical-align: middle">
            <input type="submit" name="=" value="=">
            <a>{{ !empty($ketqua) ? $ketqua : false }}</a>
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        </span>
    </form>
@endsection
