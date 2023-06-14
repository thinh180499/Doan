@extends('layouts.layout')

@section('content')
    <form action="thetich" method="post">
        <div>thể tích:</div>

        <div>
            <input type="number" name="a" style="width:100px" value="{{ !empty($a) ? $a : false }}">
            <select name="i">
                <option value="1">Ki-lô-mét khối(km3)</option>
                <option value="2">Héc-tô-mét khối(hm3)</option>
                <option value="3">Đề-ca-mét khối(dam3)</option>
                <option value="4">Mét khối(m3)</option>
                <option value="5">Đề-xi-mét khối(dm3)</option>
                <option value="6">Xen-ti-mét khối(cm3)</option>
                <option value="7">Mi-li-mét khối(mm3)</option>
            </select>
            <input type="submit" name="=" value="->">
            <input type="number" name="ketqua" style="width:100px" value="{{ !empty($ketqua) ? $ketqua : false }}"
                readonly>
            <select name="j">
                <option value="1">Ki-lô-mét khối(km3)</option>
                <option value="2">Héc-tô-mét khối(hm3)</option>
                <option value="3">Đề-ca-mét khối(dam3)</option>
                <option value="4">Mét khối(m3)</option>
                <option value="5">Đề-xi-mét khối(dm3)</option>
                <option value="6">Xen-ti-mét khối(cm3)</option>
                <option value="7">Mi-li-mét khối(mm3)</option>
            </select>
            <a>={{ !empty($lit) ? $lit : false }} lít(l)</a>
            <a>{{ !empty($thongbao) ? $thongbao : false }}</a>
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        </div>
    </form>
@endsection
