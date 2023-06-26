@extends('layouts.layout')

@section('content')
    <div class="row mt-5">
        <div class="col">
            <div class="card-style cardform">
                <h2>Tính số mol theo nồng độ mol và thể tích dung dịch (C<sub>M</sub>)</h2>
                @if ($errors->any())
                <h2 style="color: red;">
                    vui lòng kiểm tra lại dữ liệu
                </h2>
                 @endif
                <form action="moltheonongdomolvathetichdungdich" method="post">

                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    <div class="container-fluid mt-4 mb-4">
                        <div class="row justify-content-center">
                            <div class="col-auto border rounded-lg p-3 d-flex align-items-center">
                                <span class="mr-5">n = </span>
                                <span>C<sub>M</sub> * V<sub>dd</sub></span>
                            </div>
                        </div>
                    </div>


                    <div class="container">
                        <div class="row nhap d-flex justify-content-between">
                            <div class="col mb-4">
                                <label class="lb" for="nongdomol"> C<sub>M</sub></label>
                                <input type="number" id="nongdomol" name="a" placeholder="Nhập nồng độ mol"
                                    class="input" step="any" value="{{ isset($a)&&is_numeric($a) ? $a:old('a')}}" />
                                    @error('a')
                                        <span style="color: red;">{{$message}}</span>
                                    @enderror
                            </div>

                            <div class="col mb-4">
                                <label class="lb" for="thetichdungdich">V<sub>dd</sub></label>
                                <input type="number" id="thetichdungdich" name="b"
                                    placeholder="Nhập thể tích dung dịch" class="input" step="any"
                                    value="{{ isset($b)&&is_numeric($b) ? $b:old('b')}}" />
                                    @error('b')
                                        <span style="color: red;">{{$message}}</span>
                                    @enderror
                            </div>
                        </div>

                            <div class="col d-flex align-items-center mb-4">
                                <button class="btn btn-primary me-5 py-0 px-4 calculate" type="submit">=</button>
                            <span>
                                {!! isset($ketqua)?$ketqua:false !!}
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
