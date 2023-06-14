@extends('layouts.layout')

@section('content')
    <form action="luythuamunguyenduong" method="post">
        <div>Tính lũy thừa với số mũ nguyên n:</div>
        <input type="number" name="a" style="width:90px" value="{{ !empty($a) ? $a : false }}">
        <a>^</a>
        <input type="number" name="b" style="width:90px" value="{{ !empty($b) ? $b : false }}">
        <input type="submit" name="=" value="=">

        <a>{{ !empty($ketqua) ? $ketqua : false }}</a>
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    </form>
@endsection
