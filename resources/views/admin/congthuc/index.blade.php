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
                <a href=" {{route('admin.congthuc.create')}}">thêm công thức</a>
                <div class="table-wrapper table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>
                          <h6>id</h6>
                        </th>
                        <th>
                          <h6>tên công thức</h6>
                        </th>
                        <th>
                          <h6>công thức</h6>
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
                    @if(!empty($list_congthuc))
                        @foreach ($list_congthuc as $congthuc)
                      <tr>
                        <td class="min-width">
                          <p>{{$congthuc->id}}</p>
                        </td>
                        <td class="min-width">
                          <p>{{$congthuc->tencongthuc}}</p>
                    
                        <td class="min-width">
                          <p>{{$congthuc->congthuc}}</p>
                        </td>
                        <td>
                          <a href="{{route('admin.congthuc.edit',['congthuc'=>$congthuc->id])}}">sửa</a>
                        </td>
                        <td>
                          <div class="action">
                            <form action="{{route('admin.congthuc.destroy',['congthuc'=>$congthuc->id])}}" method="post">
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