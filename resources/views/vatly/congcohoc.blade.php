@extends('layouts.layout')

@section('content')
    <form action="congcohoc" method="post">
        <div>công cơ học:</div>

        <a>A=</a>

        <input type="number" name="a" style="width:90px" maxlength="3" value="{{ !empty($a) ? $a : false }}">
        <a>*</a>
        <input type="number" name="b" style="width:90px" maxlength="3" value="{{ !empty($b) ? $b : false }}">

        <input type="submit" name="=" value="=">

        <a>{{ !empty($ketqua) ? $ketqua : false }}</a>
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    @endsection
