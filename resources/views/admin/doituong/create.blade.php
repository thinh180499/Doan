@extends('layouts.admin')
@section('content')
<form action=" {{ route('admin.doituong.store' )}}" method="post">
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
                <a href=" {{route('admin.doituong.index')}}">quay lại danh sách đối tượng</a>
                </div>
          <div class="row">
            <div class="col-md-9">
              <div class="col-md-3">
                <label>ký tự</label>
                <input type="text" name="kytu" placeholder="nhập ký tự" value="{{old('kytu')}}">
                 @error('kytu')
                    <span style="color: red;">{{$message}}</span>
                @enderror 
                </div>
                <div class="col-md-3">
                <label>định nghĩa</label>
                <input type="text" name="dinhnghia" placeholder="nhập định nghĩa" value="{{old('dinhnghia')}}">
                 @error('dinhnghia')
                <span style="color: red;">{{$message}}</span>
                @enderror 
                </div>
                <div class="col-md-3">
                <label>đơn vị</label>
                <input type="text" name="donvi" placeholder="nhập đơn vị" value="{{old('donvi') }}">
                  @error('donvi')
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