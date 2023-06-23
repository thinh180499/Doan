@extends('layouts.layout')

@section('content')
    <h2>Tính số mol theo nồng độ mol và thể tích dung dịch (n)</h2>


    <form action="moltheonongdomolvathetichdungdich" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        {{-- <div>lực đẩy acsimet:</div>
        <a>F=</a>
        <input type="number" name="a" style="width:90px" placeholder="CM" maxlength="3" step="any"
            value="<?php if (isset($a)) {
                if (is_numeric($a)) {
                    echo $a;
                } else {
                    false;
                }
            } else {
                false;
            } ?>">
        <a>*</a>
        <input type="number" name="b" style="width:90px" placeholder="Vdd" maxlength="3" step="any"
            value="<?php if (isset($b)) {
                if (is_numeric($b)) {
                    echo $b;
                } else {
                    false;
                }
            } else {
                false;
            } ?>">
        <button type="submit">=</button>
        <?php if (isset($ketqua)) {
            echo $ketqua;
        } else {
            false;
        } ?>
     --}}



        <div class="container-fluid mt-4 mb-4">
            <div class="row justify-content-center">
                <div class="col-auto border rounded-lg p-3 d-flex align-items-center">
                    <span class="fw-bold mr-2">n = </span>
                    <span>C<sub>M</sub> * V<sub>dd</sub></span>
                </div>
            </div>
        </div>


        <div class="container">

            <div class="nhap d-flex justify-content-between">
                <div class="row mb-4">
                    <label class="" for="nongdomol"> C<sub>M</sub></label>
                    <input type="number" id="nongdomol" name="a" placeholder="Nhập nồng độ mol" class="input"
                        step="any" value="<?php
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

                <div class="row mb-4">
                    <label class="" for="thetichdungdich">V<sub>dd</sub></label>
                    <input type="number" id="thetichdungdich" name="b" placeholder="Nhập thể tích dung dịch"
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
            </div>

            <div class="row mb-4">
                <button class="btn btn-primary mr-4" type="submit">=</button>
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
@endsection

@section('css')
    <style>
        .container {
            max-width: 650px;
            margin: auto;
        }

        h2 {
            text-align: center;
        }

        .input {
            display: block;
            width: 100%;
            padding: 5px;
            font-size: 20px;
            border-radius: 5px;
            border: 2px solid #ccc;
        }

        label {
            font-size: 25px
        }

        span {
            font-size: 30px
        }

        hr {
            border: none;
            height: 2px;
            background: rgb(137, 137, 137);
        }
    </style>
@endsection
