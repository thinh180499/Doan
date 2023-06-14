@extends('layouts.layout')

@section('content')
    <form action="dodai" method="post">
        <div>độ dài:</div>
        <div>
            <input type="number" name="a" style="width:100px" value="{{ !empty($a) ? $a : false }}">

            <select name="i" >
                <option value="1">Ki-lô-mét (km)</option>
                <option value="2">Héc-tô-mét (hm)</option>
                <option value="3">Đề-ca-mét (dam)</option>
                <option value="4">Mét (m)</option>
                <option value="5">Đề-xi-mét (dm)</option>
                <option value="6">Xen-ti-mét (cm)</option>
                <option value="7">Mi-li-mét (mm)</option>
            </select>
            <input type="submit" name="=" value="->">
            <input type="number" name="ketqua" style="width:100px" value="{{ !empty($ketqua) ? $ketqua : false }}"
                readonly>
            <select name="j" >
                <option value="1">Ki-lô-mét (km)</option>
                <option value="2">Héc-tô-mét (hm)</option>
                <option value="3">Đề-ca-mét (dam)</option>
                <option value="4">Mét (m)</option>
                <option value="5">Đề-xi-mét (dm)</option>
                <option value="6">Xen-ti-mét (cm)</option>
                <option value="7">Mi-li-mét (mm)</option>
            </select>
            <a>{{ !empty($thongbao) ? $thongbao : false }}</a>
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        </div>
    </form>
@endsection
