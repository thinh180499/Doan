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
                <a href=" {{route('admin.lythuyet.create')}}">thêm lý thuyết</a>
                <div class="table-wrapper table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>
                          <h6>id</h6>
                        </th>
                        <th>
                          <h6>tên lý thuyết</h6>
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
                          <h6>sửa</h6>
                        </th>
                        <th>
                          <h6>xóa</h6>
                        </th>
                      </tr>
                      <!-- end table row-->
                    </thead>
                    <tbody>
                    @if(!empty($list_lythuyet))
                        @foreach ($list_lythuyet as $lythuyet)
                      <tr>
                        <td class="min-width">
                          <p>{{$lythuyet->id}}</p>
                        </td>
                        <td class="min-width">
                          <p>{{$lythuyet->tenlythuyet}}</p>
                        </td>
                        <td class="min-width">
                          <p>{{$lythuyet->noidung}}</p>
                        </td>
                        <td class="min-width">
                          <p>{{$lythuyet->congthuc}}</p>
                        </td>
                        <td class="min-width">
                          <p>{{$lythuyet->mon}}</p>
                        </td>
                        <td>
                          <a href="{{route('admin.lythuyet.edit',['lythuyet'=>$lythuyet->id])}}">sửa</a>
                        </td>
                        <td>
                          <div class="action">
                            <form action="{{route('admin.lythuyet.destroy',['lythuyet'=>$lythuyet->id])}}" method="post">
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