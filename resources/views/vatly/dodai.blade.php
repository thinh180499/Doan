@extends('layouts.layout')

@section('title', 'Chuyển đổi đơn vị độ dài')

@section('content')
    <div class="row mt-4">
        <div class="col-lg-7 tinhtoan">
            <div class="card-style cardform h-100">
                <div class="container">
                    <form action="{{ route('vatly.dodai') }}" method="post" id="input-form">
                        @csrf
                        <div class="row mb-4 d-flex flex-wrap justify-content-center">
                            <h2 class="mb-5">Chuyển đổi đơn vị độ dài</h2>

                            {{-- Phần đơn vị gốc --}}
                            <div class="col-xxl-5 d-flex">
                                {{-- input nhập --}}
                                <div class="input-style-1">
                                    <label>Từ</label>
                                    <input type="number" name="a" id="input-number"
                                        value="{{ !empty($a) ? $a : false }}">
                                </div>

                                {{-- select gốc --}}
                                <div class="select-style-1">
                                    <label>&nbsp;</label>
                                    <div class="select-position">
                                        <select name="i" id="select-from">
                                            <option <?php if (isset($x) && $x == 1) {
                                                echo 'selected ';
                                            } ?>value="1">Ki-lô-mét (km)</option>
                                            <option <?php if (isset($x) && $x == 2) {
                                                echo 'selected ';
                                            } ?>value="2">Héc-tô-mét (hm)</option>
                                            <option <?php if (isset($x) && $x == 3) {
                                                echo 'selected ';
                                            } ?>value="3">Đề-ca-mét (dam)</option>
                                            <option <?php if (isset($x) && $x == 4) {
                                                echo 'selected ';
                                            } ?>value="4">Mét (m)</option>
                                            <option <?php if (isset($x) && $x == 5) {
                                                echo 'selected ';
                                            } ?>value="5">Đề-xi-mét (dm)</option>
                                            <option <?php if (isset($x) && $x == 6) {
                                                echo 'selected ';
                                            } ?>value="6">Xen-ti-mét (cm)</option>
                                            <option <?php if (isset($x) && $x == 7) {
                                                echo 'selected ';
                                            } ?>value="7">Mi-li-mét (mm)</option>
                                        </select>
                                        <i class="lni lni-chevron-down"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-1 d-flex align-items-center justify-content-center p-0">
                                <i class="lni lni-arrows-horizontal conversion-icon"></i>
                            </div>

                            {{-- Phần đơn vị đích --}}
                            <div class="col-xxl-5 d-flex">
                                {{-- input kết quả --}}
                                <div class="input-style-1">
                                    <label>Chuyển đổi sang</label>
                                    <input type="number" id="result" readonly>
                                </div>

                                {{-- Select đích --}}
                                <div class="select-style-1">
                                    <label>&nbsp;</label>
                                    <div class="select-position">
                                        <select name="j" id="select-to">
                                            <option <?php if (isset($y) && $y == 1) {
                                                echo 'selected ';
                                            } ?>value="1">Ki-lô-mét (km)</option>
                                            <option <?php if (isset($y) && $y == 2) {
                                                echo 'selected ';
                                            } ?>value="2">Héc-tô-mét (hm)</option>
                                            <option <?php if (isset($y) && $y == 3) {
                                                echo 'selected ';
                                            } ?>value="3">Đề-ca-mét (dam)</option>
                                            <option <?php if (isset($y) && $y == 4) {
                                                echo 'selected ';
                                            } ?>value="4">Mét (m)</option>
                                            <option <?php if (isset($y) && $y == 5) {
                                                echo 'selected ';
                                            } ?>value="5">Đề-xi-mét (dm)</option>
                                            <option <?php if (isset($y) && $y == 6) {
                                                echo 'selected ';
                                            } ?>value="6">Xen-ti-mét (cm)</option>
                                            <option <?php if (isset($y) && $y == 7) {
                                                echo 'selected ';
                                            } ?>value="7">Mi-li-mét (mm)</option>
                                        </select>
                                        <i class="lni lni-chevron-down"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-5 lythuyet">
            <div class="card-style cardform h-100">
                <div class="mb-50">
                    <h3 class="mb-20">Trong đó</h3>
                    <ul>
                        <li>n: số mol (mol)</li>
                        <li>m: khối lượng chất (gam)</li>
                        <li>M: khối lượng Mol (gam/mol)</li>
                    </ul>
                </div>
                <div class="mb-30">
                    <h2 class="mb-30">Lý thuyết</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In ratione vel, eveniet sunt inventore nemo
                        debitis deleniti quisquam aliquid tenetur, earum maxime vitae id molestiae expedita quasi dolorum!
                        Consequatur, provident?</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <style>
        .select-style-1 {
            min-width: 50%
        }

        .select-style-1 .select-position select {
            font-size: 16px;
            padding: 12px 14px;
        }

        .select-style-1 .select-position::after {
            content: none;
        }

        .select-style-1 .select-position i {
            position: absolute;
            top: 17px;
            right: 10px;
        }

        .input-style-1 label,
        .select-style-1 label {
            width: 150%
        }

        i.conversion-icon {
            font-size: 35px;
            font-weight: bold
        }
    </style>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            // Gọi hàm tính toán khi có thay đổi trong thẻ #input-number, thẻ #select-from, thẻ #select-to
            $('#input-number, #select-from, #select-to').on('change keyup', function() {
                unitConversion();
            });

            // Hàm thực hiện chuyển đổi
            function unitConversion() {
                var inputNumber = $('#input-number').val();

                // Kiểm tra ô input có rỗng hay không
                if (inputNumber === '') {
                    $('#result').text(''); // Xóa kết quả trong thẻ span
                    return;
                }

                var formData = $('#input-form').serialize();

                $.ajax({
                    url: '{{ route('vatly.dodai') }}',
                    type: 'post',
                    data: formData,
                    success: function(response) {
                        $('#result').val(response.ketqua);
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                });
            }
        });
    </script>
@endsection
