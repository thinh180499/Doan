@extends('layouts.layout')

@section('title', 'Trang chủ')

@section('content')
    <div class="title-wrapper pt-50">
        <div class="row align-items-center">
            <div class="col">
                <div class="title mb-50">
                    <h1 class="text-center">Công cụ hỗ trợ học tập</h1>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>

    <div class="subject">
        <div class="row p-4">
            <h2 class="text-start">Vật lý</h2>
        </div>

        {{-- Chuyển đổi đơn vị --}}
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-sm-6 position-relative">
                <div class="icon-card mb-30">
                    <div class="icon orange">
                        <iconify-icon icon="mdi:ruler"></iconify-icon>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Chuyển đổi</h6>
                        <h3 class="text-bold mb-10">
                            <a href="<?php echo route('vatly.dodai'); ?>" class="stretched-link">Độ dài</a>
                        </h3>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6 position-relative">
                <div class="icon-card mb-30">
                    <div class="icon orange">
                        <iconify-icon icon="mdi:beaker-outline"></iconify-icon>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Chuyển đổi</h6>
                        <h3 class="text-bold mb-10">
                            <a href="<?php echo route('vatly.thetich'); ?>" class="stretched-link">Thể tích</a>
                        </h3>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6 position-relative">
                <div class="icon-card mb-30">
                    <div class="icon orange">
                        <iconify-icon icon="mdi:weight-kilogram"></iconify-icon>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Chuyển đổi</h6>
                        <h3 class="text-bold mb-10">
                            <a href="<?php echo route('vatly.khoiluong'); ?>" class="stretched-link">Khối lượng</a>
                        </h3>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
        </div>

        {{-- Tính toán theo thức --}}
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-sm-6 position-relative">
                <div class="icon-card mb-30">
                    <div class="icon primary">
                        <iconify-icon icon="mdi:weight"></iconify-icon>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Tính</h6>
                        <h3 class="text-bold mb-10">
                            <a href="<?php echo route('vatly.khoiluongrieng'); ?>" class="stretched-link">Khối lượng riêng</a>
                        </h3>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6 position-relative">
                <div class="icon-card mb-30">
                    <div class="icon primary">
                        <iconify-icon icon="mdi:weight"></iconify-icon>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Tính</h6>
                        <h3 class="text-bold mb-10">
                            <a href="<?php echo route('vatly.trongluongrieng'); ?>" class="stretched-link">Trọng lượng riêng</a>
                        </h3>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6 position-relative">
                <div class="icon-card mb-30">
                    <div class="icon primary">
                        <iconify-icon icon="mdi:speedometer-medium"></iconify-icon>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Tính</h6>
                        <h3 class="text-bold mb-10">
                            <a href="<?php echo route('vatly.vantoc'); ?>" class="stretched-link">Vận tốc</a>
                        </h3>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6 position-relative">
                <div class="icon-card mb-30">
                    <div class="icon primary">
                        <iconify-icon icon="mdi:align-horizontal-distribute"></iconify-icon>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Tính</h6>
                        <h3 class="text-bold mb-10">
                            <a href="<?php echo route('vatly.quangduong'); ?>" class="stretched-link">Quãng đường</a>
                        </h3>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-sm-6 position-relative">
                <div class="icon-card mb-30">
                    <div class="icon primary">
                        <iconify-icon icon="mdi:weight"></iconify-icon>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Tính</h6>
                        <h3 class="text-bold mb-10">
                            <a href="<?php echo route('vatly.thoigian'); ?>" class="stretched-link">Thời gian</a>
                        </h3>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6 position-relative">
                <div class="icon-card mb-30">
                    <div class="icon primary">
                        <iconify-icon icon="mdi:weight"></iconify-icon>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Tính</h6>
                        <h3 class="text-bold mb-10">
                            <a href="<?php echo route('vatly.lucacsimet'); ?>" class="stretched-link">Lực đẩy acsimec</a>
                        </h3>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6 position-relative">
                <div class="icon-card mb-30">
                    <div class="icon primary">
                        <iconify-icon icon="mdi:speedometer-medium"></iconify-icon>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Tính</h6>
                        <h3 class="text-bold mb-10">
                            <a href="<?php echo route('vatly.apsuat'); ?>" class="stretched-link">Áp suất</a>
                        </h3>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6 position-relative">
                <div class="icon-card mb-30">
                    <div class="icon primary">
                        <iconify-icon icon="mdi:align-horizontal-distribute"></iconify-icon>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Tính</h6>
                        <h3 class="text-bold mb-10">
                            <a href="<?php echo route('vatly.congcohoc'); ?>" class="stretched-link">Công cơ học</a>
                        </h3>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-sm-6 position-relative">
                <div class="icon-card mb-30">
                    <div class="icon primary">
                        <iconify-icon icon="mdi:weight"></iconify-icon>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Tính</h6>
                        <h3 class="text-bold mb-10">
                            <a href="<?php echo route('vatly.congsuat'); ?>" class="stretched-link">Công suất</a>
                        </h3>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6 position-relative">
                <div class="icon-card mb-30">
                    <div class="icon primary">
                        <iconify-icon icon="mdi:weight"></iconify-icon>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Tính</h6>
                        <h3 class="text-bold mb-10">
                            <a href="<?php echo route('vatly.nhietluong'); ?>" class="stretched-link">Nhiệt lượng</a>
                        </h3>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6 position-relative">
                <div class="icon-card mb-30">
                    <div class="icon primary">
                        <iconify-icon icon="mdi:speedometer-medium"></iconify-icon>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Tính</h6>
                        <h3 class="text-bold mb-10">
                            <a href="<?php echo route('vatly.hieusuatdongconhiet'); ?>" class="stretched-link">Hiệu suất động cơ nhiệt</a>
                        </h3>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6 position-relative">
                <div class="icon-card mb-30">
                    <div class="icon primary">
                        <iconify-icon icon="mdi:align-horizontal-distribute"></iconify-icon>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Tính</h6>
                        <h3 class="text-bold mb-10">
                            <a href="<?php echo route('vatly.cuongdodongdien'); ?>" class="stretched-link">Cường độ dòng điện</a>
                        </h3>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-sm-6 position-relative">
                <div class="icon-card mb-30">
                    <div class="icon primary">
                        <iconify-icon icon="mdi:weight"></iconify-icon>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Tính</h6>
                        <h3 class="text-bold mb-10">
                            <a href="<?php echo route('vatly.hieudienthe'); ?>" class="stretched-link">Hiệu điện thế</a>
                        </h3>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6 position-relative">
                <div class="icon-card mb-30">
                    <div class="icon primary">
                        <iconify-icon icon="mdi:weight"></iconify-icon>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Tính</h6>
                        <h3 class="text-bold mb-10">
                            <a href="<?php echo route('vatly.dientro'); ?>" class="stretched-link">Điện trở</a>
                        </h3>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6 position-relative">
                <div class="icon-card mb-30">
                    <div class="icon primary">
                        <iconify-icon icon="mdi:speedometer-medium"></iconify-icon>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Tính</h6>
                        <h3 class="text-bold mb-10">
                            <a href="<?php echo route('vatly.congsuatdongdien'); ?>" class="stretched-link">Công suất của dòng điện</a>
                        </h3>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6 position-relative">
                <div class="icon-card mb-30">
                    <div class="icon primary">
                        <iconify-icon icon="mdi:align-horizontal-distribute"></iconify-icon>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Tính</h6>
                        <h3 class="text-bold mb-10">
                            <a href="<?php echo route('vatly.congdongdien'); ?>" class="stretched-link">Công của dòng điện</a>
                        </h3>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-sm-6 position-relative">
                <div class="icon-card mb-30">
                    <div class="icon primary">
                        <iconify-icon icon="mdi:weight"></iconify-icon>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Tính</h6>
                        <h3 class="text-bold mb-10">
                            <a href="<?php echo route('vatly.nhietluongodaydan'); ?>" class="stretched-link">Nhiệt lượng ở dây dẫn</a>
                        </h3>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6 position-relative">
                <div class="icon-card mb-30">
                    <div class="icon primary">
                        <iconify-icon icon="mdi:weight"></iconify-icon>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Tính</h6>
                        <h3 class="text-bold mb-10">
                            <a href="<?php echo route('vatly.congsuathaophi'); ?>" class="stretched-link">Công suất hao phí</a>
                        </h3>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
        </div>
    </div>
@endsection

@section('css')
    <style>
        .icon-card .icon {
            max-width: 65px;
            width: 100%;
            height: 65px;
            font-size: 32px;
        }

        .icon-card {
            height: 80%;
        }
    </style>
@endsection
