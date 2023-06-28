<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon" />
  <title>Tool - @yield('title')</title>

  <!-- ========== All CSS files linkup ========= -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/lineicons.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/materialdesignicons.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/fullcalendar.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
  <style>
    .container {
        margin: auto;
    }

    h2, h3 {
        text-align: center;
    }

    .input {
        display: block;
        width: 100%;
        padding: 5px;
        font-size: 20px;
        border-radius: 5px;
        border: 2px solid #ccc;
    }

    .input-style-1 label,
    .select-style-1 label {
        font-size: 18px;
        font-weight: 500;
        color: #262d3f;
        display: block;
        margin-bottom: 10px;
    }

    .cardform span {
        font-size: 30px
    }

    button.calculate{
        font-size: 35px;
    }

    .input-style-1 input,
    .input-style-1 textarea,
    .select-style-1 .select-position select {
        background: #fff;
        border: 2px solid #e1e1e1;
        border-radius: 10px;
        padding: 12px;
        font-size: 20px;
        color: #454b5c;
    }

    .lythuyet ul{
        padding-left: 130px;
    }

    .lythuyet ul li {
        margin-bottom: 10px;
    }

    p, .lythuyet ul li {
        font-size: 18px;
    }
  </style>
  @yield('css')
</head>

<body>
  <div class="container-fluid">
    <!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper">
      <div class="navbar-logo">
        <h3>
            <a href="<?php echo route('home'); ?>">
            {{-- <img src="{{ asset('assets/images/logo/logo.svg') }}" alt="logo" /> --}}
            Tool
            </a>
        </h3>
      </div>
      <nav class="sidebar-nav">
        <ul>

        {{-- Vật lý --}}
          <li class="nav-item nav-item-has-children">
            <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_1" aria-controls="ddmenu_1"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon">
                <svg width="22" height="22" viewBox="0 0 22 22">
                  <path
                    d="M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z" />
                </svg>
              </span>
              <span class="text">Vật lý</span>
            </a>
            <ul id="ddmenu_1" class="collapse dropdown-nav">
                {{-- Chuyển đổi đơn vị --}}
                <li><a href="<?php echo route('vatly.dodai'); ?>">độ dài</a></li>
                <li><a href="<?php echo route('vatly.thetich'); ?>">thể tích</a></li>
                <li><a href="<?php echo route('vatly.khoiluong'); ?>">khối lượng</a></li>


                {{-- Tính toán theo công thức lý --}}
                {{-- Cơ học --}}
                <li><a href="<?php echo route('vatly.khoiluongrieng'); ?>">khối lượng riêng</a></li>
                <li><a href="<?php echo route('vatly.trongluongrieng'); ?>">trọng lượng riêng</a></li>
                <li><a href="<?php echo route('vatly.vantoc'); ?>">vận tốc</a></li>
                <li><a href="<?php echo route('vatly.quangduong'); ?>">quảng đường</a></li>
                <li><a href="<?php echo route('vatly.thoigian'); ?>">thời gian</a></li>
                <li><a href="<?php echo route('vatly.lucacsimet'); ?>">lực đẩy acsimet</a></li>
                <li><a href="<?php echo route('vatly.apsuat'); ?>">áp suất</a></li>
                <li><a href="<?php echo route('vatly.congcohoc'); ?>">công cơ học</a></li>
                <li><a href="<?php echo route('vatly.congsuat'); ?>">công suất</a></li>

                {{-- Nhiệt học --}}
                <li><a href="<?php echo route('vatly.nhietluong'); ?>">nhiệt lượng trong quá trình truyền nhiệt ở vật</a></li>
                <li><a href="<?php echo route('vatly.hieusuatdongconhiet'); ?>">hiệu suất động cơ nhiệt</a></li>

                {{-- Điện học --}}
                <li><a href="<?php echo route('vatly.cuongdodongdien'); ?>">cường độ dòng điện</a></li>
                <li><a href="<?php echo route('vatly.hieudienthe'); ?>">hiệu điện thế</a></li>
                <li><a href="<?php echo route('vatly.dientro'); ?>">điện trở</a></li>
                <li><a href="<?php echo route('vatly.congsuatdongdien'); ?>">công suất của dòng điện</a></li>
                <li><a href="<?php echo route('vatly.congdongdien'); ?>">công của dòng điện</a></li>
                <li><a href="<?php echo route('vatly.nhietluongodaydan'); ?>">nhiệt lượng ở dây dẫn</a></li>

                {{-- Điện từ học --}}
                <li><a href="<?php echo route('vatly.congsuathaophi'); ?>">công suất hao phí</a></li>
            </ul>
          </li>


          {{-- Toán --}}
          <li class="nav-item nav-item-has-children">
            <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_2" aria-controls="ddmenu_2"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12.8334 1.83325H5.50008C5.01385 1.83325 4.54754 2.02641 4.20372 2.37022C3.8599 2.71404 3.66675 3.18036 3.66675 3.66659V18.3333C3.66675 18.8195 3.8599 19.2858 4.20372 19.6296C4.54754 19.9734 5.01385 20.1666 5.50008 20.1666H16.5001C16.9863 20.1666 17.4526 19.9734 17.7964 19.6296C18.1403 19.2858 18.3334 18.8195 18.3334 18.3333V7.33325L12.8334 1.83325ZM16.5001 18.3333H5.50008V3.66659H11.9167V8.24992H16.5001V18.3333Z" />
                </svg>
              </span>
              <span class="text">Toán</span>
            </a>
            <ul id="ddmenu_2" class="collapse dropdown-nav">
                {{-- Đại số --}}
                {{-- Lũy thừa --}}
                <li><a href="<?php echo route('toan.luythuamunguyenduong'); ?>">lũy thừa với mũ n</a></li>
                <li><a href="<?php echo route('toan.luythuacuamotphanso'); ?>">lũy thừa của một phân số</a></li>
                <li><a href="<?php echo route('toan.luythuacuamottich'); ?>">lũy thừa của một tích</a></li>
                <li><a href="<?php echo route('toan.tichcuahailuythuacungcoso'); ?>">Tính tích của hai lũy thừa với cùng một cơ số</a></li>
                <li><a href="<?php echo route('toan.thuongcuahailuythuacungcoso'); ?>">Tính thương của hai lũy thừa với cùng một cơ số</a></li>
                <li><a href="<?php echo route('toan.luythuacuamotluythua'); ?>">lũy thừa của một lũy thừa</a></li>

                {{-- Phương trình --}}
                <li><a href="<?php echo route('toan.phuongtrinhbacnhat'); ?>">phương trình bậc 1</a></li>
                <li><a href="<?php echo route('toan.batphuongtrinhbacnhatmotan'); ?>">bất phương trình bậc nhất 1 ẩn</a></li>
                <li><a href="<?php echo route('toan.phuongtrinhbachai'); ?>">phương trình bậc 2</a></li>

                {{-- Hình học --}}
                {{-- Tam giác --}}
                <li><a href="<?php echo route('toan.canhtamgiac'); ?>">cạnh huyền của tam giác vuông</a></li>
                <li><a href="<?php echo route('toan.chuvitamgiac'); ?>">chu vi tam giác</a></li>
                <li><a href="<?php echo route('toan.dientichtamgiac'); ?>">diện tích tam giác</a></li>
                <li><a href="<?php echo route('toan.duongcaotamgiac'); ?>">đường cao của một tam giác</a></li>

                {{-- Tứ giác --}}
                <li><a href="<?php echo route('toan.chuvitugiac'); ?>">chu vi tứ giác</a></li>
                <li><a href="<?php echo route('toan.chuvihinhchunhat'); ?>">chu vi hình chữ nhật</a></li>
                <li><a href="<?php echo route('toan.chuvihinhvuong'); ?>">chu vi hình vuông</a></li>
                <li><a href="<?php echo route('toan.dientichhinhchunhat'); ?>">diện tích hình chữ nhật</a></li>
                <li><a href="<?php echo route('toan.dientichhinhvuong'); ?>">diện tích hình vuông</a></li>

                {{--hình tròn--}}
                <li><a href="<?php echo route('toan.chuvihinhtron'); ?>">chu vi hình tròn</a></li>
                <li><a href="<?php echo route('toan.dientichhinhtron'); ?>">diện tích hình tròn</a></li>

                {{-- Hỉnh khối --}}
                <li><a href="<?php echo route('toan.dientichxungquanghinhhopchunhat'); ?>">diện tích xung quanh hình hộp chữ nhật</a></li>
                <li><a href="<?php echo route('toan.dientichtoanphanhinhhopchunhat'); ?>">diện tích toàn phần hình hộp chữ nhật</a></li>
                <li><a href="<?php echo route('toan.thetichhinhhopchunhat'); ?>">thể tích hình hộp chữ nhật</a></li>
                <li><a href="<?php echo route('toan.dientichxungquanghinhlapphuong'); ?>">diện tích xung quanh hình lập phương</a></li>
                <li><a href="<?php echo route('toan.dientichtoanphanhinhlapphuong'); ?>">diện tích toàn phần hình lập phương</a></li>
                <li><a href="<?php echo route('toan.thetichhinhlapphuong'); ?>">thể tích hình lập phương</a></li>
                <li><a href="<?php echo route('toan.dientichxungquanghinhtru'); ?>">diện tích xung quanh hình trụ</a></li>
                <li><a href="<?php echo route('toan.thetichhinhtru'); ?>">thể tích hình trụ</a></li>
                <li><a href="<?php echo route('toan.dientichhinhnon'); ?>">diện tích xung quanh hình nón</a></li>
                <li><a href="<?php echo route('toan.thetichhinhnon'); ?>">thể tích hình nón</a></li>
                <li><a href="<?php echo route('toan.dientichmatcau'); ?>">diện tích mặt cầu cầu</a></li>
                <li><a href="<?php echo route('toan.thetichhinhcau'); ?>">thể tích hình cầu</a></li>
            </ul>
          </li>


          {{-- Hóa --}}
          <li class="nav-item nav-item-has-children">
            <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_3" aria-controls="ddmenu_3"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12.9067 14.2908L15.2808 11.9167H6.41667V10.0833H15.2808L12.9067 7.70917L14.2083 6.41667L18.7917 11L14.2083 15.5833L12.9067 14.2908ZM17.4167 2.75C17.9029 2.75 18.3692 2.94315 18.713 3.28697C19.0568 3.63079 19.25 4.0971 19.25 4.58333V8.86417L17.4167 7.03083V4.58333H4.58333V17.4167H17.4167V14.9692L19.25 13.1358V17.4167C19.25 17.9029 19.0568 18.3692 18.713 18.713C18.3692 19.0568 17.9029 19.25 17.4167 19.25H4.58333C3.56583 19.25 2.75 18.425 2.75 17.4167V4.58333C2.75 3.56583 3.56583 2.75 4.58333 2.75H17.4167Z" />
                </svg>
              </span>
              <span class="text">Hóa học</span>
            </a>

            <ul id="ddmenu_3" class="collapse dropdown-nav">
                {{-- Tính số mol theo ... --}}
                <li><a href="<?php echo route('hoa.moltheokhoiluong'); ?>">tính số mol theo khối lượng</a></li>
                <li><a href="<?php echo route('hoa.moltheothetich'); ?>">tính số mol theo thể tích</a></li>
                <li><a href="<?php echo route('hoa.moltheonongdomolvathetichdungdich'); ?>">tính số mol theo nồng độ mol và thể tích dung dịch</a></li>
                <li><a href="<?php echo route('hoa.moltheonongdophantramvakhoiluongdungdich'); ?>">tính số mol theo nông độ phần trăm và khối lượng dung dịch</a></li>
                <li><a href="<?php echo route('hoa.moltheonongdophantramvathetichdungdich'); ?>">tính số mol theo nông độ phần trăm và thể tích dung dịch</a></li>


                {{-- Tính nồng độ phần trăm theo ... --}}
                <li><a href="<?php echo route('hoa.nongdophantramtheokhoiluongchattan'); ?>">nồng độ phần trăm theo khối lượng chất tan và khối lượng dung dịch</a></li>
                <li><a href="<?php echo route('hoa.nongdophantramtheonongdomol'); ?>">nồng độ phần trăm theo nồng độ mol và khối lượng mol</a></li>


                {{-- Tính nồng độ mol theo ... --}}
                <li><a href="<?php echo route('hoa.nongdomoltheosomol'); ?>">tính nồng độ mol theo số mol</a></li>
                <li><a href="<?php echo route('hoa.nongdomolmoltheonongdophantram'); ?>">tính nồng độ mol theo nồng độ phần trăm</a></li>


                {{-- Tính khối lượng chất --}}
                <li><a href="<?php echo route('hoa.khoiluongchat'); ?>">tính khối lượng chất</a></li>
                <li><a href="<?php echo route('hoa.khoiluongchattan'); ?>">khối lượng chất tan</a></li>

                {{-- Tính khối dung dịch --}}
                <li><a href="<?php echo route('hoa.khoiluongdungdichtheokhoiluongdungmoi'); ?>">tính khối dung dịch theo khối lượng chất tan và khối lượng dung môi</a></li>


                {{-- Tính thể tích dung dịch theo ...  --}}
                <li><a href="<?php echo route('hoa.thetichdungdichtheonongdomol'); ?>">tính thể tích dung dich theo nồng độ mol</a></li>
                <li><a href="<?php echo route('hoa.thetichdungdichtheokhoiluongdungdich'); ?>">tính thể tích dung dịch theo khối lượng dung dịch</a></li>


            </ul>
          </li>
        </ul>
      </nav>
    </aside>
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
      <!-- ========== header start ========== -->
      <header class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-6">
              <div class="header-left d-flex align-items-center">
                <div class="menu-toggle-btn mr-20">
                  <button id="menu-toggle" class="main-btn light-btn-outline rounded-md btn-hover">
                    <i class="lni lni-chevron-left me-2"></i> Menu
                  </button>
                </div>
                <div class="header-search d-none d-md-flex">
                  <form action="#">
                    <input type="text" placeholder="Tìm kiếm" />
                    <button><i class="lni lni-search-alt"></i></button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-7 col-6">
              <div class="header-right">
                <!-- profile start -->
                <div class="profile-box ml-15">
                  <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="profile-info">
                      <div class="info">
                        <p>Tiếng Việt</p>
                      </div>
                    </div>
                    <i class="lni lni-chevron-down"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                    <li>
                      <a href="#0">
                        <i class="lni lni-user"></i> Tiếng Việt
                      </a>
                    </li>
                    <li>
                      <a href="#0">
                        <i class="lni lni-alarm"></i> Tiếng Anh
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- profile end -->
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ========== header end ========== -->

      <!-- ========== section start ========== -->
      <section class="section">
        <div class="container-fluid">

          <!-- ========== content start ========== -->
            @yield('content')
          <!-- ========== content end ========== -->

        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->

      <!-- ========== footer start =========== -->
      {{-- <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 order-last order-md-first">
              <div class="copyright text-center text-md-start">
                <p class="text-sm">
                 tool toán lý hóa
                </p>
              </div>
            </div>
            <!-- end col-->
            <div class="col-md-6">
              <div class="
                    terms
                    d-flex
                    justify-content-center justify-content-md-end
                  ">
                <a href="#0" class="text-sm">Term & Conditions</a>
                <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
              </div>
            </div>
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </footer> --}}
      <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->
  </div>


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
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        var currentPath = window.location.pathname;
        var anchors = document.querySelectorAll('.collapse.dropdown-nav li > a');

        // Iterate over each anchor and compare the route with the current URL path
        anchors.forEach(function(anchor) {
            var href = anchor.getAttribute('href');
            var route = href.split('/').pop();
            var currentRoute = currentPath.split('/').pop();
            if (currentRoute === route) {
                anchor.classList.add('active');
                var parentUl = anchor.parentNode.parentNode;
                parentUl.classList.add('show');
                var outermostAnchor = parentUl.parentNode.querySelector('a[data-bs-toggle="collapse"]');
                if (outermostAnchor) {
                    outermostAnchor.setAttribute('aria-expanded', 'true');
                    outermostAnchor.classList.remove('collapsed');
                }
            }
        });
    });
  </script>
</body>

</html>
