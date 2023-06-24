@extends('layouts.layout')

@section('content')
    <div class="row mt-5">
        <div class="col">
            <div class="card-style cardform">
                <h2>Tính thể tích dung dịch theo khối lượng dung dịch(V<sub>dd</sub>)</h2>

                <form action="thetichdungdichtheokhoiluongdungdich" method="post">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    <div class="container-fluid mt-4 mb-4">
                        <div class="row justify-content-center">
                            <div class="col-auto border rounded-lg p-3 d-flex align-items-center">
                                <div class="me-3">
                                    <span>V<sub>dd</sub> = </span>
                                </div>
                                <div>
                                    <span>m<sub>dd</sub></span>
                                    <hr>
                                    <span>D</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="container">
                        <div class="row d-flex flex-column">
                            <div class="col mb-4">
                                <label class="lb" for="khoiluongdungdich"> m<sub>dd</sub></label>
                                <input type="number" id="khoiluongdungdich" name="a" placeholder="Nhập khối lượng dung dịch"
                                    class="input" step="any" value="<?php
                                    if (isset($a)) {
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
                                <label class="lb" for="khoiluongrieng">D</label>
                                <input type="number" id="khoiluongrieng" name="b" placeholder="Nhập khối lượng riêng"
                                    class="input" step="any" value="<?php
                                    if (isset($b)) {
                                        if (is_numeric($b)) {
                                            echo $b;
                                        } else {
                                            false;
                                        }
                                    } else {
                                        false;
                                    } ?>" />
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
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <style>
        .container {
            max-width: 500px;
        }

        hr {
            border: none;
            height: 2px;
            background: rgb(137, 137, 137);
        }
    </style>
@endsection
