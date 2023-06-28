@extends('layouts.admin')
@section('content')

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
                <a href=" {{route('admin.phantutrongkhainiem.create')}}">thêm phần tử trong khái niệm</a>
                <div class="table-wrapper table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>
                          <h6>id</h6>
                        </th>
                        <th>
                          <h6>khái niệm</h6>
                        </th>
                        <th>
                          <h6>đối tượng</h6>
                        </th>
                        <th>
                          <h6>sửa</h6>
                        </th>
                        <th>
                          <h6>xóa</h6>
                        </th>
                      </tr>
                      <!-- end table row-->
                    </thead>
                    <tbody>
                    @if(!empty($list_phantutrongkhainiem))
                        @foreach ($list_phantutrongkhainiem as $phantutrongkhainiem)
                      <tr>
                        <td class="min-width">
                          <p>{{$phantutrongkhainiem->id}}</p>
                        </td>
                        <td class="min-width">
                          <p>{{$phantutrongkhainiem->khainiem_id}}</p>
                        </td>
                        <td class="min-width">
                          <p>{{$phantutrongkhainiem->doituong_id}}</p>
                        </td>
                        
                        <td>
                          <a href="{{route('admin.phantutrongkhainiem.edit',['phantutrongkhainiem'=>$phantutrongkhainiem->id])}}">sửa</a>
                        </td>
                        <td>
                          <div class="action">
                            <form action="{{route('admin.phantutrongkhainiem.destroy',['phantutrongkhainiem'=>$phantutrongkhainiem->id])}}" method="post">
                                @method('DELETE')
                            @csrf
                            <button type="submit"> <i class="lni lni-trash-can"></i></button>               
                            </form>
                          </div>
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