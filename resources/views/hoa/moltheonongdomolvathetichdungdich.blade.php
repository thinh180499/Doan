@extends('layouts.layout')

@section('title', 'Tính số mol theo nồng độ mol và thể tích dung dịch')

@section('content')
    <div class="row mt-4">
        <div class="col-lg-7 tinhtoan">
            <div class="card-style cardform h-100">
                <h2>Tính số mol theo nồng độ mol và thể tích dung dịch</h2>

                <form action="moltheonongdomolvathetichdungdich" method="post">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    <div class="container-fluid mt-4 mb-4">
                        <div class="row justify-content-center">
                            <div class="col-auto border rounded-lg p-3 d-flex align-items-center">
                                <span class="me-3">n = </span>
                                <span>C<sub>M</sub> * V<sub>dd</sub></span>
                            </div>
                        </div>
                    </div>


                    <div class="container">
                        <div class="row d-flex justify-content-between">
                            <div class="col mb-4">
                                <div class="input-style-1">
                                    <label for="nongdomol"> C<sub>M</sub></label>
                                    <input type="number" id="nongdomol" name="a" placeholder="Nhập nồng độ mol"
                                        class="input" step="any"
                                        value="{{ isset($a) && is_numeric($a) ? $a : old('a') }}" />
                                </div>
                            </div>

                            <div class="col mb-4">
                                <div class="input-style-1">
                                    <label for="thetichdungdich">V<sub>dd</sub></label>
                                    <input type="number" id="thetichdungdich" name="b"
                                        placeholder="Nhập thể tích dung dịch" class="input" step="any"
                                        value="{{ isset($b) && is_numeric($b) ? $b : old('b') }}" />
                                </div>
                            </div>
                        </div>

                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-2">
                                <button class="btn btn-primary me-5 py-0 px-4 calculate" type="submit">=</button>
                            </div>
                            <div class="col-10">
                                <span>
                                    {!! isset($ketqua) ? $ketqua . ' (mol)' : false !!}
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
                                            @error('b')
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
        <div class="col-lg-5 lythuyet">
            <div class="card-style cardform h-100">
                <div class="mb-50">
                    <h3 class="mb-20">Trong đó</h3>
                    <ul>
                        <li>n: số mol (mol)</li>
                        <li>m: khối lượng chất (gam)</li>
                        <li>M: khối lượng Mol (gam/mol)</li>
                    </ul>
                </div>
                <div class="mb-30">
                    <h2 class="mb-30">Lý thuyết</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In ratione vel, eveniet sunt inventore nemo debitis deleniti quisquam aliquid tenetur, earum maxime vitae id molestiae expedita quasi dolorum! Consequatur, provident?</p>
                </div>
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
