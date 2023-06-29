@extends('layouts.admin')
@section('content')
<form action="{{route('admin.phantutrongkhainiem.update',['phantutrongkhainiem'=>$phantutrongkhainiem->id])}}" method="post">
  @method('PUT')
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
                  @if(!empty($msr))
                      {{$msr}}
                  @endif
                </h6>
                <h1>thêm lý thuyết</h1>
                
                <div class="table-wrapper table-responsive">
                  <button type="submit">lưu</button>
                <a href=" {{route('admin.phantutrongkhainiem.index')}}">quay lại danh sách lý thuyết</a>
                </div>
          <div class="row">
            <div class="col-md-9">
              <div class="col-md-3">
                <label>tên lý thuyết</label>
                <label>khái niệm</label>
                <input type="text" name="khainiem_id" placeholder="nhập khái niêm" value="{{old('khainiem_id')?? $phantutrongkhainiem->khainiem_id}}">
                 @error('khainiem_id')
                    <span style="color: red;">{{$message}}</span>
                @enderror 
                </div>
                <div class="col-md-3">
                <label>đối tượng</label>
                <input type="text" name="doituong_id" placeholder="nhập đối tượng" value="{{old('doituong_id')?? $phantutrongkhainiem->doituong_id}}">
                 @error('doituong_id')
                <span style="color: red;">{{$message}}</span>
                @enderror 
                <select name="khainiem_id">
                    @if(!empty($list_khainiem))
                        @foreach ($list_khainiem as $khainiem)
                      <option <?php if ($phantutrongkhainiem->khainiem_id == $khainiem->id) {
                          echo 'selected ';
                        } ?>value="{{$khainiem->id}}">{{$khainiem->tenkhainiem}}</option>
                        @endforeach          
                    @endif
                    </select>
                    </div>
                    <div class="col-md-3">
                    <select name="mon">
                    @if(!empty($list_doituong))
                        @foreach ($list_doituong as $doituong)
                      <option <?php if ($phantutrongkhainiem->doituong_id == $doituong->id) {
                        echo 'selected ';
                      } ?>value="{{$doituong->id}}">{{$doituong->kytu}}</option>
                        @endforeach              
                    </select>
                       
                    @endif
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