@extends('layouts.admin')
@section('content')
    <form action=" {{ route('admin.doituong.store') }}" method="post">
        @csrf
        <!-- ========== tables-wrapper start ========== -->
        <div class="tables-wrapper mt-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style mb-30">
                        <h4 class="mb-45">
                            @if (!empty($title))
                                {{ $title }}
                            @endif
                        </h4>

                        <div class="row mb-4">
                            <div class="col">
                                <div class="input-style-1">
                                    <label>ký tự</label>
                                    <input type="text" name="kytu" placeholder="nhập ký tự"
                                        value="{{ old('kytu') }}">
                                    @error('kytu')
                                        <span style="color: red;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-style-1">
                                    <label>định nghĩa</label>
                                    <input type="text" name="dinhnghia" placeholder="nhập định nghĩa"
                                        value="{{ old('dinhnghia') }}">
                                    @error('dinhnghia')
                                        <span style="color: red;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-style-1">
                                    <label>đơn vị</label>
                                    <input type="text" name="donvi" placeholder="nhập đơn vị"
                                        value="{{ old('donvi') }}">
                                    @error('donvi')
                                        <span style="color: red;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex justify-content-end">
                            <button class="main-btn success-btn rounded-md btn-hover mb-4" type="submit">Lưu</button>
                            <a class="main-btn light-btn rounded-md btn-hover ms-3"
                                href=" {{ route('admin.doituong.index') }}">Hủy</a>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
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
