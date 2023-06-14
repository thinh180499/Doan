@extends('layouts.layout')

@section('content')
    {{-- <a href="<?php echo route('home'); ?>">
        <h1>home</h1>
    </a> --}}
    <br><a href="<?php echo route('vatly'); ?>">
        <h2>vật lý</h2>
    </a>
    <a href="<?php echo route('vatly.dodai'); ?>">độ dài</a><br>
    <a href="<?php echo route('vatly.thetich'); ?>">thể tích</a><br>
    <a href="<?php echo route('vatly.khoiluong'); ?>">khối lượng</a><br>
    <a href="<?php echo route('vatly.khoiluongrieng'); ?>">khối lượng riêng</a><br>
    <a href="<?php echo route('vatly.trongluongrieng'); ?>">trọng lượng riêng</a><br>
    <a href="<?php echo route('vatly.vantoc'); ?>">vận tốc</a><br>
    <a href="<?php echo route('vatly.quangduong'); ?>">quảng đường</a><br>
    <a href="<?php echo route('vatly.thoigian'); ?>">thời gian</a><br>
    <a href="<?php echo route('vatly.lucacsimet'); ?>">lực đẩy acsimet</a><br>
    <a href="<?php echo route('vatly.apsuat'); ?>">áp suất</a><br>
    <a href="<?php echo route('vatly.congcohoc'); ?>">công cơ học</a><br>
    <a href="<?php echo route('vatly.congsuat'); ?>">công suất</a><br>
    <a href="<?php echo route('vatly.nhietluong'); ?>">nhiệt lượng</a><br>
    <a href="<?php echo route('vatly.hieusuatdongconhiet'); ?>">hiệu suất của động cơ nhiệt</a><br>
    <a href="<?php echo route('vatly.congsuathaophi'); ?>">công suất hao phí</a><br>
    {{-- <br><a href="<?php echo route('toan'); ?>">
        <h2>toán</h2>
    </a>
    <br><a href="<?php echo route('hoa'); ?>">
        <h2>hóa</h2>
    </a> --}}
@endsection
