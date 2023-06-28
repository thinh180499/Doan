@extends('layouts.admin')
@section('content')
<form action=" {{ route('admin.hinh.store' )}}" method="post">
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
                
                <div class="table-wrapper table-responsive">
                  <button type="submit">lưu</button>
                <a href=" {{route('admin.hinh.index')}}">quay lại danh sách hình</a>
                </div>
          <div class="row">
            <div class="col-md-9">
              <div class="col-md-3">
              <label>img</label>
                <input type="text" name="img" placeholder="nhập tên hình" value="{{old('img')}}">
                 @error('img')
                    <span style="color: red;">{{$message}}</span>
                @enderror 
                </div>
                
                  <div class="col-md-3">
                    <label>khái niệm</label>
                    <input type="text" name="khainiem_id" placeholder="nhập khái niệm" value="{{old('khainiem_id')}}">
                    @error('khainiem_id')
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