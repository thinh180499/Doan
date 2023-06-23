@extends('layouts.layout')

@section('content')
    <h2>Tính nồng độ mol theo số mol (C<sub>M</sub>)</h2>

    <form action="nongdomoltheosomol" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">


        <div class="container-fluid mt-4 mb-4">
            <div class="row justify-content-center">
                <div class="col-auto border rounded-lg p-3 d-flex align-items-center">
                    <div class="mr-3">
                        <span class="fw-bold">C<sub>M</sub> = </span>
                    </div>
                    <div>
                        <span>n<sub>ct</sub></span>
                        <hr>
                        <span>V<sub>dd</sub></span>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row mb-4">
                <label class="" for="somolchattan"> n<sub>ct</sub></label>
                <input type="number" id="somolchattan" name="a" placeholder="Nhập số mol chất tan" class="input"
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
            max-width: 500px;
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
