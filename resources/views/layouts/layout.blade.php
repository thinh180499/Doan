<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tool toán lý hóa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets\clients\images\favicon.ico') }}">
    <!-- App css -->
    <link href="{{ asset('assets\clients\css\bootstrap.min.css') }}" rel="stylesheet" type="text/css"
        id="bootstrap-stylesheet">
    <link href="{{ asset('assets\clients\css\icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets\clients\css\app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet">
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">


        <!-- Topbar Start -->
        <div class="navbar-custom">

            <!-- LOGO -->
            <div class="logo-box">
                <a href="<?php echo route('home');?>" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{ asset('assets\clients\images\logo-dark.png') }}" alt="" height="26">
                        <!-- <span class="logo-lg-text-dark">Simple</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-lg-text-dark">S</span> -->
                        <img src="{{ asset('assets\clients\images\logo-sm.png') }}" alt="" height="22">
                    </span>
                </a>

                <a href="index.html" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{ asset('assets\clients\images\logo-light.png') }}" alt="" height="26">
                        <!-- <span class="logo-lg-text-light">Simple</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-lg-text-light">S</span> -->
                        <img src="{{ asset('assets\clients\images\logo-sm.png') }}" alt="" height="22">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </li>

                <li class="d-none d-sm-block">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Tìm kiếm...">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
        <!-- end Topbar -->
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">


            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul class="metismenu" id="side-menu">

                    <li class="menu-title">Môn học</li>

                    {{-- Vat ly --}}
                    <li>
                        <a href="javascript: void(0);">
                            <i class="ti-light-bulb"></i>
                            <span> Vật lý </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="<?php echo route('vatly.dodai'); ?>">độ dài</a></li>
                            <li><a href="<?php echo route('vatly.thetich'); ?>">thể tích</a></li>
                            <li><a href="<?php echo route('vatly.khoiluong'); ?>">khối lượng</a></li>
                            <li><a href="<?php echo route('vatly.khoiluongrieng'); ?>">khối lượng riêng</a></li>
                            <li><a href="<?php echo route('vatly.trongluongrieng'); ?>">trọng lượng riêng</a></li>
                            <li><a href="<?php echo route('vatly.vantoc'); ?>">vận tốc</a></li>
                            <li><a href="<?php echo route('vatly.quangduong'); ?>">quảng đường</a></li>
                            <li><a href="<?php echo route('vatly.thoigian'); ?>">thời gian</a></li>
                            <li><a href="<?php echo route('vatly.lucacsimet'); ?>">lực đẩy acsimet</a></li>
                            <li><a href="<?php echo route('vatly.apsuat'); ?>">áp suất</a></li>
                            <li><a href="<?php echo route('vatly.congcohoc'); ?>">công cơ học</a></li>
                            <li><a href="<?php echo route('vatly.congsuat'); ?>">công suất</a></li>
                            <li><a href="<?php echo route('vatly.nhietluong'); ?>">nhiệt lượng</a></li>
                            <li><a href="<?php echo route('vatly.hieusuatdongconhiet'); ?>">hiệu suất động cơ nhiệt</a></li>
                            <li><a href="<?php echo route('vatly.cuongdodongdien'); ?>">cường độ dòng điện</a></li>
                            <li><a href="<?php echo route('vatly.hieudienthe'); ?>">hiệu điện thế</a></li>
                            <li><a href="<?php echo route('vatly.dientro'); ?>">điện trở</a></li>
                            <li><a href="<?php echo route('vatly.congsuathaophi'); ?>">công suất hao phí</a></li>
                        </ul>
                    </li>

                    {{-- Toan --}}
                    <li>
                        <a href="javascript: void(0);">
                            <i class=" mdi mdi-math-integral"></i>
                            <span> Toán </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="<?php echo route('toan.luythuamunguyenduong'); ?>">lũy thừa với mũ n</a></li>
                            <li><a href="<?php echo route('toan.luythuacuamotphanso'); ?>">lũy thừa của một phân số</a></li>
                            <li><a href="<?php echo route('toan.phuongtrinhbachai'); ?>">phương trình bậc 2</a></li>
                        </ul>
                    </li>

                    {{-- Hoa hoc --}}
                    <li>
                        <a href="javascript: void(0);">
                            <i class=" mdi mdi-flask-outline"></i>
                            <span> Hóa học </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="<?php echo route('hoa.moltheokhoiluong'); ?>">tính số mol theo khối lượng</a></li>
                            <li><a href="<?php echo route('hoa.moltheonongdomolvathetichdungdich'); ?>">tính số mol theo nồng độ mol và thể tích dung dịch</a></li>
                        </ul>
                    </li>

                </ul>

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>


        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start container-fluid -->

                    <!-- main start   -->
                    <div class="row">
                        <div class="col-12">
                            <div>
                                @yield('content')
                            </div>
                            <p class="mt-3">
                                &larr; <a href="<?php echo route('home'); ?>">Quay về trang chủ</a>
                            </p>
                        </div>
                    </div>
                    <!-- main end -->

                </div>
                <!-- end container-fluid -->



                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                2023 - Tool toán lý hóa
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>
            <!-- end content -->

        </div>
        <!-- END content-page -->

    </div>
    <!-- END wrapper -->


    <!-- Right Sidebar -->
    <div class="right-bar">
        <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i class="mdi mdi-close"></i>
            </a>
            <h5 class="font-16 m-0 text-white">Theme Customizer</h5>
        </div>
        <div class="slimscroll-menu">

            <div class="p-4">
                <div class="alert alert-warning" role="alert">
                    <strong>Customize </strong> the overall color scheme, layout, etc.
                </div>
                <div class="mb-2">
                    <img src="{{ asset('assets\clients\images\layouts\light.png') }}" class="img-fluid img-thumbnail"
                        alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch"
                        checked="">
                    <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="{{ asset('assets\clients\images\layouts\dark.png') }}" class="img-fluid img-thumbnail"
                        alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch"
                        data-bsstyle="{{ asset('assets\clients\css\bootstrap\dark.min.css') }}"
                        data-appstyle="{{ asset('assets\clients\css\app\dark.min.css') }}">
                    <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                </div>

                <div class="mb-2">
                    <img src="{{ asset('assets\clients\images\layouts\rtl.png') }}" class="img-fluid img-thumbnail"
                        alt="">
                </div>
                <div class="custom-control custom-switch mb-5">
                    <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch"
                        data-appstyle="{{ asset('assets\clients\css\app\rtl.min.css') }}">
                    <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                </div>

                <a href="https://1.envato.market/EK71X" class="btn btn-danger btn-block mt-3" target="_blank"><i
                        class="mdi mdi-download mr-1"></i> Download Now</a>
            </div>
        </div> <!-- end slimscroll-menu-->
    </div>

    <!-- Vendor js -->
    <script src="{{ asset('assets\clients\js\vendor.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets\clients\js\app.min.js') }}"></script>

</body>

</html>
