@extends('layouts.admin')
@section('content')
    <form action="{{ route('admin.mon.update', ['mon' => $mon->id]) }}" method="post">
        @method('PUT')
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
                            @if (!empty($msr))
                                {{ $msr }}
                            @endif
                        </h4>


                        <div class="row mb-4">
                            <div class="col">
                                <div class="input-style-1">
                                    <label>môn</label>
                                    <input type="text" name="mon" placeholder="nhập môn"
                                        value="{{ old('mon') ?? $mon->mon }}">
                                    @error('mon')
                                        <span style="color: red;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex justify-content-end">
                            <button class="main-btn success-btn rounded-md btn-hover mb-4" type="submit">Lưu</button>
                            <a class="main-btn light-btn rounded-md btn-hover ms-3"
                                href=" {{ route('admin.mon.index') }}">Hủy</a>
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
