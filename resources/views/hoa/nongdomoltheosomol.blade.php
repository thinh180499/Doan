@extends('layouts.layout')

@section('content')
    <div class="row mt-5">
        <div class="col">
            <div class="card-style cardform">
                <h2>Tính nồng độ mol theo số mol (C<sub>M</sub>)</h2>
                @if ($errors->any())
                <h2 style="color: red;">
                    vui lòng kiểm tra lại dữ liệu
                </h2>
                 @endif
        
                <form action="nongdomoltheosomol" method="post">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    <div class="container-fluid mt-4 mb-4">
                        <div class="row justify-content-center">
                            <div class="col-auto border rounded-lg p-3 d-flex align-items-center">
                                <div class="mr-5">
                                    <span>C<sub>M</sub> = </span>
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
                        <div class="row d-flex flex-column">
                            <div class="col mb-4">
                                <label class="lb" for="somolchattan"> n<sub>ct</sub></label>
                                <input type="number" id="somolchattan" name="a" placeholder="Nhập số mol chất tan"
                                    class="input" step="any" value="{{ old('a') }} {{ isset($a)&&is_numeric($a) ? $a:false}}" />
                                    @error('a')
                                        <span style="color: red;">{{$message}}</span>
                                    @enderror
                            </div>

                            <div class="col mb-4">
                                <label class="lb" for="thetichdungdich">V<sub>dd</sub></label>
                                <input type="number" id="thetichdungdich" name="b" placeholder="Nhập thể tích dung dịch"
                                    class="input" step="any" value="{{ old('b') }} {{ isset($b)&&is_numeric($b) ? $b:false }}" />
                                @error('b')
                                    <span style="color: red;">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col d-flex align-items-center mb-4">
                                <button class="btn btn-primary me-5 py-0 px-4 calculate" type="submit">=</button>
                                <span>
                                {!! isset($ketqua)?$ketqua:false !!}
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
