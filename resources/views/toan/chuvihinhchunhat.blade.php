@extends('layouts.layout')

@section('content')
    <div class="row mt-5">
        <div class="col">
            <div class="card-style cardform">
                <h2>Tính chu vi hình chữ nhật</h2>

                <form action="chuvihinhchunhat" method="post">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    <div class="container-fluid mt-4 mb-4">
                        <div class="row justify-content-center">
                            <div class="col-auto border rounded-lg p-3 d-flex align-items-center">
                                <div class="mr-5">
                                    <span>P=2(a+b) </span>
                                </div>
                               
                            </div>
                        </div>
                    </div>


                    <div class="container">
                        <div class="row d-flex flex-column">
                            <div class="col mb-4">
                                <label class="lb" for="somolchattan"> cạnh a</label>
                                <input type="number" id="somolchattan" name="a" placeholder="Nhập cạnh a"
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
                                <label class="lb" for="thetichdungdich">cạnh b</label>
                                <input type="number" id="thetichdungdich" name="b" placeholder="Nhập cạnh b"
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
                                        if (is_numeric($ketqua)) {
                                            echo "P=".$ketqua;
                                        } else {
                                            echo $ketqua;
                                        }
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
