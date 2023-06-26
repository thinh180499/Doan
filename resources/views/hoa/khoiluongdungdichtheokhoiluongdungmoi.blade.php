@extends('layouts.layout')

@section('content')
    <div class="row mt-5">
        <div class="col">
            <div class="card-style cardform">
                <h2>Tính khối lượng dung dịch theo khối lượng chất tan và khối lượng dung môi</h2>
                @if ($errors->any())
                <h2 style="color: red;">
                    vui lòng kiểm tra lại dữ liệu
                </h2>
                 @endif
                <form action="khoiluongdungdichtheokhoiluongdungmoi" method="post">

                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    <div class="container-fluid mt-4 mb-4">
                        <div class="row justify-content-center">
                            <div class="col-auto border rounded-lg p-3 d-flex align-items-center">
                                <span class="mr-5">m<sub>dd</sub> =m<sub>ct</sub>+m<sub>dm</sub> </span>
                                
                            </div>
                        </div>
                            
                    </div>


                    <div class="container">
                        <div class="row nhap d-flex justify-content-between">
                            <div class="col mb-4">
                                <label class="lb" for="somol">m<sub>ct</sub></label>
                                <input type="number" id="somol" name="a" placeholder="Nhập khối lượng chất tan"
                                    class="input" step="any" value="{{ isset($a)&&is_numeric($a) ? $a:old('a')}}" />
                                    @error('a')
                                        <span style="color: red;">{{$message}}</span>
                                    @enderror
                            </div>

                            <div class="col mb-4">
                                <label class="lb" for="khoiluongmol">m<sub>dm</sub></label>
                                <input type="number" id="khoiluongmol" name="b"
                                    placeholder="Nhập khối lượng dung môi" class="input" step="any"
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
