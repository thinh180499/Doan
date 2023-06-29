@extends('layouts.admin')
@section('content')
<form action="{{route('admin.khainiem.update',['khainiem'=>$khainiem->id])}}" method="post">
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
                <div class="table-wrapper table-responsive">
                  <button type="submit">lưu</button>
                <a href=" {{route('admin.khainiem.index')}}">quay lại danh sách khái niệm</a>
                </div>
          <div class="row">
            <div class="col-md-9">
              <div class="col-md-3">
                <label>tên khái niệm</label>
                <input type="text" name="tenkhainiem" placeholder="nhập tên khái niệm" value="{{old('tenkhainiem')?? $khainiem->tenkhainiem}}">
                 @error('tenkhainiem')
                    <span style="color: red;">{{$message}}</span>
                @enderror 
                </div>
                <div class="col-md-3">
                <label>nội dung</label>
                <input type="text" name="noidung" placeholder="nhập nội dung" value="{{old('noidung')?? $khainiem->noidung}}">
                 @error('noidung')
                <span style="color: red;">{{$message}}</span>
                @enderror 
                </div>
                
                <div class="col-md-3">
                    <select name="congthuc">
                    @if(!empty($list_congthuc))
                        @foreach ($list_congthuc as $congthuc)
                      <option <?php if ($khainiem->congthuc_id == $congthuc->id) {
                          echo 'selected ';
                        } ?>value="{{$congthuc->id}}">{{$congthuc->tencongthuc}}</option>
                        @endforeach          
                    @endif
                    </select>
                    </div>
                    <div class="col-md-3">
                    <select name="mon">
                    @if(!empty($list_mon))
                        @foreach ($list_mon as $mon)
                      <option <?php if ($khainiem->mon_id == $mon->id) {
                        echo 'selected ';
                      } ?>value="{{$mon->id}}">{{$mon->mon}}</option>
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