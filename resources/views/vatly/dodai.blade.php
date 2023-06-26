@extends('layouts.layout')

@section('content')
    <div class="row mt-5">
        <div class="col">
            <div class="card-style cardform">
            
                <h2>Chuyển đổi đơn vị độ dài</h2>
                <form action="dodai" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="container mt-5">
                        <div class="row nhap d-flex justify-content-between">
                            <div class="col mb-4">
                                <div class="input-style-1">
                                    <label>Nhập số muốn chuyển đổi</label>
                                    <input type="number" name="a" value="{{ !empty($a) ? $a : false }}">
                                </div>
                            </div>

                            <div class="col mb-4">
                                <div class="select-style-1">
                                    <label>Chuyển đổi từ</label>
                                    <div class="select-position">
                                        <select name="i">
                                            <option <?php if (isset($x) && $x == 1) {
                                                echo 'selected ';
                                            } ?>value="1">Ki-lô-mét (km)</option>
                                            <option <?php if (isset($x) && $x == 2) {
                                                echo 'selected ';
                                            } ?>value="2">Héc-tô-mét (hm)</option>
                                            <option <?php if (isset($x) && $x == 3) {
                                                echo 'selected ';
                                            } ?>value="3">Đề-ca-mét (dam)</option>
                                            <option <?php if (isset($x) && $x == 4) {
                                                echo 'selected ';
                                            } ?>value="4">Mét (m)</option>
                                            <option <?php if (isset($x) && $x == 5) {
                                                echo 'selected ';
                                            } ?>value="5">Đề-xi-mét (dm)</option>
                                            <option <?php if (isset($x) && $x == 6) {
                                                echo 'selected ';
                                            } ?>value="6">Xen-ti-mét (cm)</option>
                                            <option <?php if (isset($x) && $x == 7) {
                                                echo 'selected ';
                                            } ?>value="7">Mi-li-mét (mm)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col mb-4">
                                <div class="select-style-1">
                                    <label>Chuyển đổi sang</label>
                                    <div class="select-position">
                                        <select name="j">
                                            <option <?php if (isset($y) && $y == 1) {
                                                echo 'selected ';
                                            } ?>value="1">Ki-lô-mét (km)</option>
                                            <option <?php if (isset($y) && $y == 2) {
                                                echo 'selected ';
                                            } ?>value="2">Héc-tô-mét (hm)</option>
                                            <option <?php if (isset($y) && $y == 3) {
                                                echo 'selected ';
                                            } ?>value="3">Đề-ca-mét (dam)</option>
                                            <option <?php if (isset($y) && $y == 4) {
                                                echo 'selected ';
                                            } ?>value="4">Mét (m)</option>
                                            <option <?php if (isset($y) && $y == 5) {
                                                echo 'selected ';
                                            } ?>value="5">Đề-xi-mét (dm)</option>
                                            <option <?php if (isset($y) && $y == 6) {
                                                echo 'selected ';
                                            } ?>value="6">Xen-ti-mét (cm)</option>
                                            <option <?php if (isset($y) && $y == 7) {
                                                echo 'selected ';
                                            } ?>value="7">Mi-li-mét (mm)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-2">
                                <button class="btn btn-primary me-5 py-0 px-4 calculate" type="submit">=</button>
                            </div>
                            <div class="col-10">
                                <span>
                                    {{ !empty($ketqua) ? $ketqua : false }}
                                </span>
                                <span>
                                    {{ !empty($thongbao) ? $thongbao : false }}
                                </span>
                            </div>
                        </div>

                        
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <style>
        .container {
            max-width: 800px;
        }
    </style>
@endsection
