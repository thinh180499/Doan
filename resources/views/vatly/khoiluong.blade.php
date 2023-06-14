@extends('layouts.layout')

@section('content')
    <form action="khoiluong" method="post">
        <div>khối lượng:</div>
        <div>
            <input type="number" name="a" style="width:100px" value="{{ !empty($a) ? $a : false }}">

            <select name="i" >
                <option value="1">Tấn</option>
                <option value="2">Tạ</option>
                <option value="3">Yến</option>
                <option value="4">Ki-lo-gam(kg)</option>
                <option value="5">Hec-to-gam(hg)</option>
                <option value="6">De-ca-gam(dag)</option>
                <option value="7">Gam(g)</option>
            </select>
            <input type="submit" name="=" value="->">
            <input type="number" name="ketqua" style="width:100px" value="{{ !empty($ketqua) ? $ketqua : false }}"
                readonly>
            <select name="j" >
                <option value="1">Tấn</option>
                <option value="2">Tạ</option>
                <option value="3">Yến</option>
                <option value="4">Hec-to-gam(hg)</option>
                <option value="5">Đề-xi-mét (dm)</option>
                <option value="6">De-ca-gam(dag)</option>
                <option value="7">Gam(g)</option>
            </select>
            <a>{{ !empty($thongbao) ? $thongbao : false }}</a>
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        </div>
    </form>
@endsection
