@extends('layouts.layout')

@section('title', 'Chuyển đổi đơn vị khối lượng')

@section('content')
    <div class="row mt-4">
        <div class="col-lg-8 tinhtoan">
            <div class="card-style cardform h-100">
                <h2 class="mt-4 mb-70">Chuyển đổi đơn vị khối lượng</h2>
                <form action="khoiluong" method="post">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="container-fluid">
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
                                            } ?>value="1">Tấn</option>
                                            <option <?php if (isset($x) && $x == 2) {
                                                echo 'selected ';
                                            } ?>value="2">Tạ</option>
                                            <option <?php if (isset($x) && $x == 3) {
                                                echo 'selected ';
                                            } ?>value="3">Yến</option>
                                            <option <?php if (isset($x) && $x == 4) {
                                                echo 'selected ';
                                            } ?>value="4">Ki-lo-gam (kg)</option>
                                            <option <?php if (isset($x) && $x == 5) {
                                                echo 'selected ';
                                            } ?>value="5">Hec-to-gam(hg)</option>
                                            <option <?php if (isset($x) && $x == 6) {
                                                echo 'selected ';
                                            } ?>value="6">De-ca-gam(dag)</option>
                                            <option <?php if (isset($x) && $x == 7) {
                                                echo 'selected ';
                                            } ?>value="7">Gam(g)</option>
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
                                            } ?>value="1">Tấn</option>
                                            <option <?php if (isset($y) && $y == 2) {
                                                echo 'selected ';
                                            } ?>value="2">Tạ</option>
                                            <option <?php if (isset($y) && $y == 3) {
                                                echo 'selected ';
                                            } ?>value="3">Yến</option>
                                            <option <?php if (isset($y) && $y == 4) {
                                                echo 'selected ';
                                            } ?>value="4">Ki-lo-gam (kg)</option>
                                            <option <?php if (isset($y) && $y == 5) {
                                                echo 'selected ';
                                            } ?>value="5">Hec-to-gam(hg)</option>
                                            <option <?php if (isset($y) && $y == 6) {
                                                echo 'selected ';
                                            } ?>value="6">De-ca-gam(dag)</option>
                                            <option <?php if (isset($y) && $y == 7) {
                                                echo 'selected ';
                                            } ?>value="7">Gam(g)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row d-flex align-items-center my-4">
                            <div class="col-2">
                                <button class="btn btn-primary me-5 py-0 px-4 calculate" type="submit">=</button>
                            </div>
                            <div class="col-10">
                                <span>
                                    {{ !empty($ketqua) ? $ketqua : false }}
                                </span>
                                @if ($errors->any())
                                    <div class="alert-box danger-alert m-0 w-100">
                                        <div class="alert">
                                            <h4 class="alert-heading">
                                                Vui lòng kiểm tra lại dữ liệu
                                            </h4>

                                            @error('a')
                                                <p class="text-medium">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-4 lythuyet">
            <div class="card-style cardform h-100">
                <div class="mb-50">
                    <h3 class="mt-4 mb-20">Trong đó</h3>
                    <ul>
                        <li>n: số mol (mol)</li>
                        <li>m: khối lượng chất (gam)</li>
                        <li>M: khối lượng Mol (gam/mol)</li>
                    </ul>
                </div>
                <div class="mb-30">
                    <h2 class="mb-30">Lý thuyết</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In ratione vel, eveniet sunt inventore nemo
                        debitis deleniti quisquam aliquid tenetur, earum maxime vitae id molestiae expedita quasi dolorum!
                        Consequatur, provident?</p>
                </div>
            </div>
        </div>
    </div>
@endsection
