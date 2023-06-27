@extends('layouts.layout')

@section('title', 'Tính số mol theo khối lượng')

@section('content')
    <div class="row mt-4">
        <div class="col-lg-7 tinhtoan">
            <div class="card-style cardform h-100">
                <h2>Tính số mol theo khối lượng:</h2>

                <form action="moltheokhoiluong" method="post">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    <div class="container-fluid mt-4 mb-4">
                        <div class="row justify-content-center">
                            <div class="col-auto border rounded-lg p-3 d-flex align-items-center">
                                <div class="me-3">
                                    <span>n = </span>
                                </div>
                                <div>
                                    <span>m</span>
                                    <hr>
                                    <span>M</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="container">
                        <div class="row d-flex flex-column">
                            <div class="col">
                                <div class="input-style-1">
                                    <label for="somolchattan"> m</label>
                                    <input type="number" id="somolchattan" name="a"
                                        placeholder="Nhập khối lượng chất" class="input" step="any"
                                        value="{{ isset($a) && is_numeric($a) ? $a : old('a') }}" />
                                </div>
                            </div>

                            <div class="col mb-4">
                                <div class="input-style-1">
                                    <label for="thetichdungdich">M</label>
                                    <input type="number" id="thetichdungdich" name="b"
                                        placeholder="Nhập khối lượng mol" class="input" step="any"
                                        value="{{ isset($b) && is_numeric($b) ? $b : old('b') }}" />
                                </div>
                            </div>

                            <div class="col d-flex align-items-center mb-4">
                                <button class="btn btn-primary me-5 py-0 px-4 calculate" type="submit">=</button>
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In ratione vel, eveniet sunt inventore nemo
                        debitis deleniti quisquam aliquid tenetur, earum maxime vitae id molestiae expedita quasi dolorum!
                        Consequatur, provident?</p>
                </div>
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
