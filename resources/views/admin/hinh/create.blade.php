@extends('layouts.admin')
@section('content')
<form action=" {{ route('admin.hinh.store' )}}" method="post" enctype="multipart/form-data">
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
                <input type="file" name="img" placeholder="nhập tên hình" value="{{old('img')}}">
                 @error('img')
                    <span style="color: red;">{{$message}}</span>
                @enderror 
                </div>
                
                  <div class="col-md-3">
                    <select name="khainiem_id">
                    @if(!empty($list_khainiem))
                        @foreach ($list_khainiem as $khainiem)
                      <option value="{{$khainiem->id}}">{{$khainiem->tenkhainiem}}</option>
                        @endforeach          
                    @endif
                    </select>
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