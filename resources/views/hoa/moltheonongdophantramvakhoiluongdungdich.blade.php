@extends('layouts.layout')

@section('content')
    <form action="moltheonongdophantramvakhoiluongdungdich" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div>Tính số mol theo nông độ phần trăm và khối lượng dung dịch</div>
        <a>n=&#40;</a>
        <input type="number" name="a" style="width:90px"placeholder="C&#37" step="any" value="<?php if(isset($a)){ if(is_numeric($a)){echo $a;}else{false;} }else{false;} ?>">
        <a>*</a>
        <input type="number" name="b" style="width:90px" placeholder="mdd" step="any" value="<?php if(isset($b)){ if(is_numeric($b)){echo $b;}else{false;} }else{false;} ?>">
        <a>&#41;/&#40;100&#37;</a>
        <input type="number" name="c" style="width:90px" placeholder="M" step="any" value="<?php if(isset($c)){ if(is_numeric($c)){echo $c;}else{false;} }else{false;} ?>">
        <a>&#41;</a>
         <button type="submit">=</button>
        <?php if(isset($ketqua)){echo $ketqua;}else{false;} ?>
       
    </form>
@endsection



@extends('layouts.layout')

@section('content')
    <div class="row mt-5">
        <div class="col">
            <div class="card-style cardform">
                <h2>tính số mol theo khối lượng:</h2>
                @if ($errors->any())
                <h2 style="color: red;">
                    vui lòng kiểm tra lại dữ liệu
                </h2>
                 @endif
        
                <form action="moltheonongdophantramvakhoiluongdungdich" method="post">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    <div class="container-fluid mt-4 mb-4">
                        <div class="row justify-content-center">
                            <div class="col-auto border rounded-lg p-3 d-flex align-items-center">
                                <div class="mr-5">
                                    <span>n = </span>
                                </div>
                                <div>
                                    <span>C&#37;*m<sub>dd</sub></span>
                                    <hr>
                                    <span>100&#37;*M</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="container">
                        <div class="row d-flex flex-column">
                            <div class="col mb-4">
                                <label class="lb" for="somolchattan">C&#37;</label>
                                <input type="number" id="somolchattan" name="a" placeholder="Nhập nồng độ phần trăm"
                                    class="input" step="any" value="{{ isset($a)&&is_numeric($a) ? $a:old('a')}}" />
                                    @error('a')
                                        <span style="color: red;">{{$message}}</span>
                                    @enderror
                            </div>

                            <div class="col mb-4">
                                <label class="lb" for="thetichdungdich">M</label>
                                <input type="number" id="thetichdungdich" name="b" placeholder="Nhập khối lượng dung dịch"
                                    class="input" step="any" value="{{ isset($b)&&is_numeric($b) ? $b:old('b')}}" />
                                @error('b')
                                    <span style="color: red;">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col mb-4">
                                <label class="lb" for="thetichdungdich">M</label>
                                <input type="number" id="thetichdungdich" name="c" placeholder="Nhập M"
                                    class="input" step="any" value="{{ isset($b)&&is_numeric($b) ? $b:old('b')}}" />
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
