@extends('layouts.layout')

@section('content')
    {{-- <a href="<?php echo route('home'); ?>">
        <h1>home</h1>
    </a>
    <br><a href="<?php echo route('vatly'); ?>">
        <h2>vật lý</h2>
    </a>
    <br><a href="<?php echo route('toan'); ?>">
        <h2>toán</h2>
    </a> --}}
    <br><a href="<?php echo route('hoa'); ?>">
        <h2>hóa</h2>
    </a>
    <a href="<?php echo route('hoa.moltheokhoiluong'); ?>">tính số mol theo khối lượng</a><br>
@endsection
