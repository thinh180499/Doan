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
                <a href="#">thêm lý thuyết</a>
                <div class="table-wrapper table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>
                          <h6>id</h6>
                        </th>
                        <th>
                          <h6>img</h6>
                        </th>
                        <th>
                          <h6>id lý thuyết</h6>
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
                    @if(!empty($dslythuyet))
                        @foreach ($dslythuyet as $key => $item)
                      <tr>
                        <td class="min-width">
                          <div class="lead">
                            <div class="lead-image">
                            <p>{{$key +1}}</p>
                            </div>
                            <div class="lead-text">
                              <p>{{$item->tenlythuyet}}</p>
                            </div>
                          </div>
                        </td>
                        <td class="min-width">
                          <p>{{$item->noidung}}</p>
                        </td>
                        
                        <td>
                          <div class="action">
                            <button class="text-danger">
                            sửa
                            </button>
                          </div>
                        </td>
                        <td>
                          <div class="action">
                            <button class="text-danger">
                            <i class="lni lni-trash-can"></i>
                            </button>
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