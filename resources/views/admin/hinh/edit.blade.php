@extends('layouts.admin')
@section('content')
    <form action="{{ route('admin.hinh.update', ['hinh' => $hinh->id]) }}" method="post">
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
                                    <label>img</label>
                                    <input type="text" name="img" placeholder="nhập tên hình"
                                        value="{{ old('img') ?? $hinh->img }}">
                                    @error('img')
                                        <span style="color: red;">{{ $message }}</span>
                                    @enderror
                                </div>

                            <div class="col">
                                <div class="select-style-1">
                                    <div class="select-position">
                                        <label>Môn</label>
                                        <select name="khainiem_id">
                                            @if (!empty($list_khainiem))
                                                @foreach ($list_khainiem as $khainiem)
                                                    <option <?php if ($hinh->khainiem_id == $khainiem->id) {
                                                        echo 'selected ';
                                                    } ?> value="{{ $khainiem->id }}">
                                                        {{ $khainiem->tenkhainiem }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4 d-flex justify-content-end">
                            <button class="main-btn success-btn rounded-md btn-hover mb-4" type="submit">Lưu</button>
                            <a class="main-btn light-btn rounded-md btn-hover ms-3"
                                href=" {{ route('admin.congthuc.index') }}">Hủy</a>
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
        .select-style-1 .select-position::after {
            top: 65%
        }
    </style>
@endsection
