@extends('layouts.layout')

@section('content')
    <div class="row mt-5">
        <div class="col">
            <div class="card-style cardform">

                <h2>Bất phương trình bậc nhất 1 ẩn</h2>
                @if ($errors->any())
                <h2 style="color: red;">
                    vui lòng kiểm tra lại dữ liệu
                </h2>
                 @endif
                <form action="batphuongtrinhbacnhatmotan" method="post">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="container-fluid mt-4 mb-4">
                        <div class="row justify-content-center">

                            <div class="col-auto border rounded-lg p-3 d-flex align-items-center">
                                <span class="mr-5">ax + b >= </span>
                                <span>0</span>
                            </div>

                        </div>
                    </div>
                    <div class="container mt-5">
                        <div class="row nhap d-flex justify-content-between">
                            <div class="col mb-4">
                                <div class="input-style-1">
                                    <label>Nhập a</label>
                                    <input type="number" name="a" value="{{ !empty($a) ? $a : false }}">
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="input-style-1">
                                    <label>Nhập b</label>
                                    <input type="number" name="a" value="{{ !empty($a) ? $a : false }}">
                                </div>
                            </div>

                            <div class="col mb-4">
                                <div class="select-style-1">
                                    <label>Nhập dấu</label>
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


                        </div>

                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-2">
                                <button class="btn btn-primary me-5 py-0 px-4 calculate" type="submit">=</button>
                            </div>
                            <div class="col-10">
                                <span>
                                    {{ !empty($ketqua) ? $ketqua : false }}
                                </span>
                                @error('a')
                                        <span style="color: red;">{{$message}}</span>
                                @enderror
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
            max-width: 900px;
        }
    </style>
@endsection