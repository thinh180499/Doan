@extends('layouts.layout')

@section('content')
    <form action="luythuamunguyenduong" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <div>Tính lũy thừa với số mũ n:</div>
    @if ($errors->any())
        <div style="color: red;">
            vui lòng kiểm tra lại dữ liệu
        </div>
    @endif
        
        <input type="number" name="a" style="width:90px"placeholder="a" step="any" value="{{ isset($a)&&is_numeric($a) ? $a:false }}">
        <a>^</a>
        <input type="number" name="b" style="width:90px" placeholder="n" step="any" value="{{ isset($b)&&is_numeric($b) ? $b:false }}">
        <button type="submit">=</button>
        {!! isset($ketqua)?$ketqua:false !!}
        @error('a')
            <span style="color: red;">{{$message}}</span>
        @enderror
        @error('b')
        <span style="color: red;">{{$message}}</span>
        @enderror
      
    </form>
@endsection
