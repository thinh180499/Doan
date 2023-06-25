@extends('layouts.layout')

@section('content')
    <div class="row mt-5">
        <div class="col">
            <div class="card-style cardform">
                <h2>Tính phương trình bậc 2</h2>

                <form action="phuongtrinhbachai" method="post">

                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    <div class="container-fluid mt-4 mb-4">
                        <div class="row justify-content-center">
                            <div class="col-auto border rounded-lg p-3 d-flex align-items-center">
                                <span class="mr-5">ax<sup>2</sup> + bx + c = </span>
                                <span>0</span>
                            </div>
                        </div>
                    </div>


                    <div class="container">
                        <div class="row nhap d-flex justify-content-between">
                            <div class="col mb-4">
                                <label class="lb" for="ptbac2-a">a</label>
                                <input type="text" id="ptbac2-a" name="a" placeholder="Nhập a" class="input"
                                    step="any" value="<?php if (isset($a)) {
                                        if (is_numeric($a)) {
                                            echo $a;
                                        } else {
                                            false;
                                        }
                                    } else {
                                        false;
                                    } ?>" />
                            </div>
                            <div class="col mb-4">
                                <label class="lb" for="ptbac2-b">b</label>
                                <input type="text" id="ptbac2-b" name="b" placeholder="Nhập b" class="input"
                                    step="any" value="<?php if (isset($b)) {
                                        if (is_numeric($b)) {
                                            echo $b;
                                        } else {
                                            false;
                                        }
                                    } else {
                                        false;
                                    } ?>" />
                            </div>
                            <div class="col mb-4">
                                <label class="lb" for="ptbac2-c">c</label>
                                <input type="text" id="ptbac2-c" name="c" placeholder="Nhập c" class="input"
                                    step="any" value="<?php if (isset($c)) {
                                        if (is_numeric($c)) {
                                            echo $c;
                                        } else {
                                            false;
                                        }
                                    } else {
                                        false;
                                    } ?>" />
                            </div>
                        </div>

                        <div class="col d-flex align-items-center mb-4">
                            <button class="btn btn-primary me-5 py-0 px-4 calculate" type="submit">=</button>
                            <span>
                                <?php if (isset($ketqua)) {
                                    echo $ketqua;
                                } else {
                                    false;
                                } ?>
                            </span>
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
            max-width: 650px;
        }
    </style>
@endsection
