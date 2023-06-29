@extends('layouts.admin')
@section('content')
    <form action=" {{ route('admin.congthuc.store') }}" method="post">
        @csrf
        <!-- ========== tables-wrapper start ========== -->
        <div class="tables-wrapper mt-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style mb-30">
                        <div class="container">
                            <h4 class="mb-45">
                                @if (!empty($title))
                                    {{ $title }}
                                @endif
                            </h4>

                            <div class="row mb-4">
                                <div class="col">
                                    <div class="input-style-1">
                                        <label>tên công thức</label>
                                        <input type="text" name="tencongthuc" placeholder="nhập tên công thức"
                                            value="{{ old('tencongthuc') }}">
                                        @error('tencongthuc')
                                            <span style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="input-style-1">
                                        <label>công thức</label>
                                        <input type="text" name="congthuc" placeholder="nhập công thức"
                                            value="{{ old('congthuc') }}">
                                        @error('congthuc')
                                            <span style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 d-flex justify-content-end">
                                <button class="main-btn success-btn rounded-md btn-hover mb-4" type="submit">Lưu</button>
                                <a class="main-btn light-btn rounded-md btn-hover ms-3" href=" {{ route('admin.congthuc.index') }}">Hủy</a>
                            </div>
                            <!-- end card -->
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
            <!-- ========== tables-wrapper end ========== -->
    </form>
@endsection

@section('css')
    <style>
        .main-btn {
            padding: 0px 20px;
            height: 46px;
            line-height: 46px;
            max-width: 120px;
        }
    </style>
@endsection