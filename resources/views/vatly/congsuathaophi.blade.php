@extends('layouts.layout')

@section('content')
    <form action="congsuathaophi" method="post">
        <div>công suất hao phí:</div>
        <span style="display:inline-block;height:50px;vertical-align: middle">
            <a>P(hp)=</a>
        </span>
        <div style="display:inline-block;height:90px;vertical-align: middle">
            <span style="display:inline-block;padding: 0 5px 10px 5px;border-bottom: 2px solid #999">
                <input type="number" name="a" style="width:90px" maxlength="3" placeholder="R"
                    value="{{ !empty($a) ? $a : false }}">* <input type="number" name="b" style="width:30px"
                    maxlength="3" placeholder="P" value="{{ !empty($b) ? $b : false }}">2
            </span>
            <br>
            <span style="display:inline-block;padding: 10px 5px 0 5px">
                <input type="number" name="c" style="width:90px" maxlength="3" placeholder="U"
                    value="{{ !empty($c) ? $c : false }}">2
            </span>

        </div>
        <span style="display:inline-block;height:50px;vertical-align: middle">
            <input type="submit" name="=" value="=">
            <a>{{ !empty($ketqua) ? $ketqua : false }}</a>
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        </span>
    </form>
@endsection
