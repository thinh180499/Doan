@extends('layouts.layout')

@section('content')
    <div class="row mt-5">
        <div class="col">
            <div class="card-style cardform">
                <h2>Tính khối lượng chất (C<sub>M</sub>)</h2>

                <form action="khoiluongchat" method="post">

                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    <div class="container-fluid mt-4 mb-4">
                        <div class="row justify-content-center">
                            <div class="col-auto border rounded-lg p-3 d-flex align-items-center">
                                <span class="mr-5">m = </span>
                                <span>n * M</span>
                            </div>
                        </div>
                    </div>


                    <div class="container">
                        <div class="row nhap d-flex justify-content-between">
                            <div class="col mb-4">
                                <label class="lb" for="somol">n</label>
                                <input type="number" id="somol" name="a" placeholder="Nhập số mol"
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
                                <label class="lb" for="khoiluongmol">M</label>
                                <input type="number" id="khoiluongmol" name="b"
                                    placeholder="Nhập khối lượng mol" class="input" step="any"
                                    value="<?php
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
