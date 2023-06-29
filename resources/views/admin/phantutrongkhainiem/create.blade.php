@extends('layouts.admin')
@section('content')
    <form action=" {{ route('admin.phantutrongkhainiem.store') }}" method="post">
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
                                <div class="select-style-1">
                                    <div class="select-position">
                                        <label>Tên khái niệm</label>

                                        <select name="khainiem_id">
                                            @if (!empty($list_khainiem))
                                                @foreach ($list_khainiem as $khainiem)
                                                    <option value="{{ $khainiem->id }}">{{ $khainiem->tenkhainiem }}
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
                                        <label>Tên khái niệm</label>
                                        <select name="doituong_id">
                                            @if (!empty($list_doituong))
                                                @foreach ($list_doituong as $doituong)
                                                    <option value="{{ $doituong->id }}">{{ $doituong->kytu }}</option>
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
                                href=" {{ route('admin.phantutrongkhainiem.index') }}">Hủy</a>
                        </div>
                    </div>

                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

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
