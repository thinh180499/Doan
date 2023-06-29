@extends('layouts.admin')
@section('content')
    <form action=" {{ route('admin.khainiem.store') }}" method="post">
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
                                    <label>tên khái niệm</label>
                                    <input type="text" name="tenkhainiem" placeholder="nhập tên khái niệm"
                                        value="{{ old('tenkhainiem') }}">
                                    @error('tenkhainiem')
                                        <span style="color: red;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="select-style-1">
                                    <div class="select-position">
                                        <label>Công thức</label>
                                        <select name="congthuc">
                                            @if (!empty($list_congthuc))
                                                @foreach ($list_congthuc as $congthuc)
                                                    <option value="{{ $congthuc->id }}">{{ $congthuc->tencongthuc }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="select-style-1">
                                    <div class="select-position">
                                        <label>Môn</label>
                                        <select name="mon">
                                            @if (!empty($list_mon))
                                                @foreach ($list_mon as $mon)
                                                    <option value="{{ $mon->id }}">{{ $mon->mon }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="input-style-1">
                                <label>nội dung</label>
                                {{-- <input type="text" name="noidung" placeholder="nhập nội dung"
                                value="{{ old('noidung') }}"> --}}
                                <textarea name="noidung" rows="10" placeholder="nhập nội dung">{{ old('noidung') }}</textarea>
                                @error('noidung')
                                    <span style="color: red;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4 d-flex justify-content-end">
                            <button class="main-btn success-btn rounded-md btn-hover mb-4" type="submit">Lưu</button>
                            <a class="main-btn light-btn rounded-md btn-hover ms-3"
                                href=" {{ route('admin.khainiem.index') }}">Hủy</a>
                        </div>
                    </div>

                </div>
                <!-- end card -->
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

        .select-style-1 .select-position::after {
            top: 65%
        }
    </style>
@endsection
