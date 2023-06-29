@extends('layouts.admin')
@section('content')

    <!-- ========== tables-wrapper start ========== -->
    <div class="tables-wrapper mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-style mb-30">
                    <h4 class="mb-10">
                        @if (!empty($title))
                            {{ $title }}
                        @endif
                    </h4>
                    <a class="main-btn success-btn rounded-md btn-hover" href=" {{ route('admin.khainiem.create') }} ">Thêm khái niệm</a>
                    <div class="table-wrapper table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <h6>id</h6>
                                    </th>
                                    <th>
                                        <h6>tên khái niêm</h6>
                                    </th>
                                    <th>
                                        <h6>nội dung</h6>
                                    </th>
                                    <th>
                                        <h6>công thức</h6>
                                    </th>
                                    <th>
                                        <h6>môn</h6>
                                    </th>
                                    <th>
                                        <h6>Chức năng</h6>
                                    </th>
                                </tr>
                                <!-- end table row-->
                            </thead>
                            <tbody>
                                @if (!empty($list_khainiem))
                                    @foreach ($list_khainiem as $khainiem)
                                        <tr>
                                            <td class="min-width">
                                                <p>{{ $khainiem->id }}</p>
                                            </td>
                                            <td class="min-width">
                                                <p>{{ $khainiem->tenkhainiem }}</p>
                                            </td>
                                            <td class="min-width">
                                                <p>{{ $khainiem->noidung }}</p>
                                            </td>
                                            <td class="min-width">
                                                <p>{{ $khainiem->tencongthuc }}</p>
                                            </td>
                                            <td class="min-width">
                                                <p>{{ $khainiem->mon }}</p>
                                            </td>
                                            <td class="min-width d-flex">
                                                <a class="main-btn primary-btn rounded-md btn-hover me-3"
                                                    href="{{ route('admin.khainiem.edit', ['khainiem' => $khainiem->id]) }}">Sửa</a>
                                                <form
                                                    action="{{ route('admin.khainiem.destroy', ['khainiem' => $khainiem->id]) }}"
                                                    method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="main-btn danger-btn rounded-md btn-hover"
                                                        type="submit">Xóa</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <!-- end table row -->
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="min-width">không có lý thuyết</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        <!-- end table -->
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

    </div>
    <!-- ========== tables-wrapper end ========== -->
@endsection

@section('css')
    <style>
        .main-btn {
            padding: 0px 20px;
            height: 46px;
            line-height: 46px;
        }
        td:nth-child(3) {
          width: 45%;
        }
    </style>
@endsection
