@extends('layouts.layout')

@section('content')
    <form action="dodai" method="post">
        <div>độ dài:</div>
        <div>
            <input type="number" name="a" style="width:100px" value="{{ !empty($a) ? $a : false }}">

            <select name="i" >
                <option <?php if(isset($x)&& $x==1){echo "selected ";}?>value="1">Ki-lô-mét (km)</option>
                <option <?php if(isset($x)&& $x==2){echo "selected ";}?>value="2">Héc-tô-mét (hm)</option>
                <option <?php if(isset($x)&& $x==3){echo "selected ";}?>value="3">Đề-ca-mét (dam)</option>
                <option <?php if(isset($x)&& $x==4){echo "selected ";}?>value="4">Mét (m)</option>
                <option <?php if(isset($x)&& $x==5){echo "selected ";}?>value="5">Đề-xi-mét (dm)</option>
                <option <?php if(isset($x)&& $x==6){echo "selected ";}?>value="6">Xen-ti-mét (cm)</option>
                <option <?php if(isset($x)&& $x==7){echo "selected ";}?>value="7">Mi-li-mét (mm)</option>
            </select>
            <input type="submit" name="=" value="->">
            <input type="number" name="ketqua" style="width:100px" value="{{ !empty($ketqua) ? $ketqua : false }}"
                readonly>
            <select name="j" >
                <option <?php if(isset($y)&&$y=1){echo "selected ";}?>value="1">Ki-lô-mét (km)</option>
                <option <?php if(isset($y)&&$y=2){echo "selected ";}?>value="2">Héc-tô-mét (hm)</option>
                <option <?php if(isset($y)&&$y=3){echo "selected ";}?>value="3">Đề-ca-mét (dam)</option>
                <option <?php if(isset($y)&&$y=4){echo "selected ";}?>value="4">Mét (m)</option>
                <option <?php if(isset($y)&&$y=5){echo "selected ";}?>value="5">Đề-xi-mét (dm)</option>
                <option <?php if(isset($y)&&$y=6){echo "selected ";}?>value="6">Xen-ti-mét (cm)</option>
                <option <?php if(isset($y)&&$y=7){echo "selected ";}?>value="7">Mi-li-mét (mm)</option>
            </select>
            <a>{{ !empty($thongbao) ? $thongbao : false }}</a>
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        </div>
    </form>
@endsection
