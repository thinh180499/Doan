@extends('layouts.admin')
@section('content')
<form action=" {{ route('admin.congthuc.store' )}}" method="post">
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
                <a href=" {{route('admin.congthuc.index')}}">quay lại danh sách công thức</a>
                </div>
          <div class="row">
            <div class="col-md-9">
              <div class="col-md-3">
                <label>tên công thức</label>
                <input type="text" name="tencongthuc" placeholder="nhập tên công thức" value="{{old('tencongthuc')}}">
                 @error('tencongthuc')
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