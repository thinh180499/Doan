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
                <a href=" {{route('admin.doituong.create')}}">thêm đối tượng</a>
                <div class="table-wrapper table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>
                          <h6>id</h6>
                        </th>
                        <th>
                          <h6>ký tự</h6>
                        </th>
                        <th>
                          <h6>định nghĩa</h6>
                        </th>
                        <th>
                          <h6>đơn vị</h6>
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
                    @if(!empty($list_doituong))
                        @foreach ($list_doituong as $doituong)
                      <tr>
                        <td class="min-width">
                          <p>{{$doituong->id}}</p>
                        </td>
                        <td class="min-width">
                          <p>{{$doituong->kytu}}</p>
                        </td>
                        <td class="min-width">
                          <p>{{$doituong->dinhnghia}}</p>
                        </td>
                        <td class="min-width">
                          <p>{{$doituong->donvi}}</p>
                        </td>
                        
                        <td>
                          <a href="{{route('admin.doituong.edit',['doituong'=>$doituong->id])}}">sửa</a>
                        </td>
                        <td>
                          <div class="action">
                            <form action="{{route('admin.doituong.destroy',['doituong'=>$doituong->id])}}" method="post">
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