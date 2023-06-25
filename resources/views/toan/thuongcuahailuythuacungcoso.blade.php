@extends('layouts.layout')

@section('content')
    <div class="row mt-5">
        <div class="col">
            <div class="card-style cardform">
                <h2>Tính thương của hai lũy thừa với cùng một cơ số:</h2>
                @if ($errors->any())
                <h2 style="color: red;">
                    vui lòng kiểm tra lại dữ liệu
                </h2>
                 @endif
        
                <form action="thuongcuahailuythuacungcoso" method="post">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    <div class="container-fluid mt-4 mb-4">
                        <div class="row justify-content-center">
                             
                            
                            
                            <div class="col-auto border rounded-lg p-3 d-flex align-items-center">
                            
                                <div class="mr-5">
                                   
                                        <span>a^n</span>
                                        <hr>
                                        <span>b^m</span>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>


                    <div class="container">
                        <div class="row d-flex flex-column">
                            <div class="col mb-4">
                                <label class="lb" for="somolchattan"> a</label>
                                <input type="number" id="somolchattan" name="a" placeholder="Nhập a"
                                    class="input" step="any" value="{{ isset($a)&&is_numeric($a) ? $a:old('a')}}" />
                                    @error('a')
                                        <span style="color: red;">{{$message}}</span>
                                    @enderror
                                    @if (isset($err))
                                    <h2 style="color: red;">
                                        {{$err}}
                                    </h2>
                                    @endif
                            </div>

                            <div class="col mb-4">
                                <label class="lb" for="thetichdungdich">n</label>
                                <input type="number" id="thetichdungdich" name="b" placeholder="Nhập n"
                                    class="input" step="any" value="{{ isset($b)&&is_numeric($b) ? $b:old('b') }}" />
                                @error('b')
                                    <span style="color: red;">{{$message}}</span>
                                @enderror
                                
                            </div>

                            <div class="col mb-4">
                                <label class="lb" for="thetichdungdich">m</label>
                                <input type="number" id="thetichdungdich" name="c" placeholder="Nhập m"
                                    class="input" step="any" value="{{ isset($c)&&is_numeric($c) ? $c:old('c') }}" />
                                @error('c')
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
