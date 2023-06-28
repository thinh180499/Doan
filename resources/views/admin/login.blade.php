
<!-- <h1>Login</h1>
@if(!empty($msr))
    <div style="color: red;">{{$msr}}</div>
@endif
<form action="#" method="post">
    @csrf
    <div>
        <label>tên admin</label>
        <input type="text" name="adminname" placeholder="nhập tên admin" value="{{old('adminnane')}}">
        @error('adminname')
            <span style="color: red;">{{$message}}</span>
        @enderror
    </div>
    <div>
        <label>password</label>
        <input type="text" name="password" placeholder="nhập password" value="{{old('password')}}">
        @error('password')
            <span style="color: red;">{{$message}}</span>
        @enderror
    </div>

    <button type="submit">login</button>
    <a href="">quay lại</a>
</form> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon" />
  <title>Sign In | PlainAdmin Demo</title>

  <!-- ========== All CSS files linkup ========= -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/lineicons.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/materialdesignicons.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/fullcalendar.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
  <style>
    .container {
      max-width: 800px;
    }
  </style>
</head>

<body>
<form action="#" method="post">
    @csrf
  <div class="container my-5 pt-5">
    <div class="row g-0 auth-row">
      <div class="col">
        <div class="signin-wrapper">
          <div class="form-wrapper">
            <h1 class="mb-15">Đăng nhập</h1>
            <form action="#">
              <div class="row">
                <div class="col-12">
                  <div class="input-style-1">
                  <label>tên admin</label>
        <input type="text" name="adminname" placeholder="nhập tên admin" value="{{old('adminnane')}}">
        @error('adminname')
            <span style="color: red;">{{$message}}</span>
        @enderror
                  </div>
                </div>
                <!-- end col -->
                <div class="col-12">
                  <div class="input-style-1">
                  <label>password</label>
        <input type="text" name="password" placeholder="nhập password" value="{{old('password')}}">
        @error('password')
            <span style="color: red;">{{$message}}</span>
        @enderror
                  </div>
                </div>
                <!-- end col -->
                <div class="col-xxl-6 col-lg-12 col-md-6">
                  <div class="form-check checkbox-style mb-30">
                    <input class="form-check-input" type="checkbox" value="" id="checkbox-remember" />
                    <label class="form-check-label" for="checkbox-remember">
                      Lưu tài khoản</label>
                  </div>
                </div>
                <!-- end col -->
                
                
                <div class="col-12">
                  <div class="
                        button-group
                        d-flex
                        justify-content-center
                        flex-wrap
                      ">
                    <button class="
                          main-btn
                          primary-btn
                          btn-hover
                          w-100
                          text-center
                        ">
                      Đăng nhập
                    </button>
                  </div>
                </div>
              </div>
              <!-- end row -->
            </form>
            
          </div>
        </div>
      </div>
      <!-- end col -->
    </div>
    <!-- end row -->
  </div>
  </form>
  <!-- ========= All Javascript files linkup ======== -->
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/js/dynamic-pie-chart.js') }}"></script>
  <script src="{{ asset('assets/js/moment.min.js') }}"></script>
  <script src="{{ asset('assets/js/fullcalendar.js') }}"></script>
  <script src="{{ asset('assets/js/jvectormap.min.js') }}"></script>
  <script src="{{ asset('assets/js/world-merc.js') }}"></script>
  <script src="{{ asset('assets/js/polyfill.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>