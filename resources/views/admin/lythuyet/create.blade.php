@extends('layouts.admin')
@section('content')
<form action=" {{ route('admin.lythuyet.store' )}}" method="post">
@csrf
    <!-- ========== tables-wrapper start ========== -->
    <div class="tables-wrapper mt-4">
          <div class="row">
            <div class="col-lg-12">
              <div class="card-style mb-30">
                <h6 class="mb-10">
                  @if(!empty($title))
                      {{$title}}
                  @endif
                </h6>
                <h1>thêm lý thuyết</h1>
                
                <div class="table-wrapper table-responsive">
                  <button type="submit">lưu</button>
                <a href=" {{route('admin.lythuyet.index')}}">quay lại danh sách lý thuyết</a>
                </div>
          <div class="row">
            <div class="col-md-9">
              <div class="col-md-3">
                <label>tên lý thuyết</label>
                <input type="text" name="tenlythuyet" placeholder="nhập tên lý thuyết" value="{{old('tenlythuyet')}}">
                 @error('tenlythuyet')
                    <span style="color: red;">{{$message}}</span>
                @enderror 
                </div>
                <div class="col-md-3">
                <label>nội dung</label>
                <input type="text" name="noidung" placeholder="nhập nội dung" value="{{old('noidung')}}">
                 @error('noidung')
                <span style="color: red;">{{$message}}</span>
                @enderror 
                </div>
                <div class="col-md-3">
                <label>công thức</label>
                <input type="text" name="congthuc" placeholder="nhập công thức" value="{{old('congthuc') }}">
                  @error('congthuc')
                  <span style="color: red;">{{$message}}</span>
                  @enderror
                  </div>
                  <div class="col-md-3">
                    <label>môn</label>
                    <input type="text" name="mon" placeholder="nhập môn" value="{{old('mon')}}">
                    @error('mon')
                    <span style="color: red;">{{$message}}</span>
                    @enderror
                    </div>
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