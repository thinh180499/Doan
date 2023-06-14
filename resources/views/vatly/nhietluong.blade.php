@extends('layouts.layout')

@section('content')
    <form action="nhietluong" method="post">
        <div>nhiệt lượng:</div>

        <a>Q=</a>

        <input type="number"name="a" style="width:90px" maxlength="3" value="{{ !empty($a) ? $a : false }}">
        <a>2*</a>
        <input type="number" name="b" style="width:90px" maxlength="3" value="{{ !empty($b) ? $b : false }}">
        <a>*</a>
        <input type="number" name="c" style="width:90px" maxlength="3" value="{{ !empty($c) ? $c : false }}">

        <input type="submit" name="=" value="=">

        <a>{{ !empty($ketqua) ? $ketqua : false }}</a>
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    </form>
@endsection
