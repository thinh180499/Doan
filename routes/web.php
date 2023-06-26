<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VatlyController;
use App\Http\Controllers\ToanController;
use App\Http\Controllers\HoaController;
use App\Http\Controllers\Admin\LythuyetController;
use App\Http\Controllers\Admin\HinhController;
use App\Http\Controllers\Admin\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/home', function () {
//     return view('home');
// });
// Route::get('/khoiluong', function () {
//     return view('khoiluongrieng');
// });
// Route::post('/khoiluong', function () {
//     return view('khoiluongrieng');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');


// Vật lý
Route::get('/vatly', [HomeController::class, 'vatly'])->name('vatly');
Route::prefix('/vatly')->group(function () {
    // Chuyển đổi đơn vị
    Route::get('dodai', [VatlyController::class, 'dodai'])->name('vatly.dodai');
    Route::post('dodai', [VatlyController::class, 'doidodai']);

    Route::get('thetich', [VatlyController::class, 'thetich'])->name('vatly.thetich');
    Route::post('thetich', [VatlyController::class, 'doithetich']);

    Route::get('khoiluong', [VatlyController::class, 'khoiluong'])->name('vatly.khoiluong');
    Route::post('khoiluong', [VatlyController::class, 'doikhoiluong']);


    // Tính toán theo công thức lý
    // Cơ học
    Route::get('khoiluongrieng', [VatlyController::class, 'khoiluongrieng'])->name('vatly.khoiluongrieng');
    Route::post('khoiluongrieng', [VatlyController::class, 'tinhkhoiluongrieng']);

    Route::get('trongluongrieng', [VatlyController::class, 'trongluongrieng'])->name('vatly.trongluongrieng');
    Route::post('trongluongrieng', [VatlyController::class, 'tinhtrongluongrieng']);

    Route::get('vantoc', [VatlyController::class, 'vantoc'])->name('vatly.vantoc');
    Route::post('vantoc', [VatlyController::class, 'tinhvantoc']);

    Route::get('quangduong', [VatlyController::class, 'quangduong'])->name('vatly.quangduong');
    Route::post('quangduong', [VatlyController::class, 'tinhquangduong']);

    Route::get('thoigian', [VatlyController::class, 'thoigian'])->name('vatly.thoigian');
    Route::post('thoigian', [VatlyController::class, 'tinhthoigian']);

    Route::get('lucacsimet', [VatlyController::class, 'lucacsimet'])->name('vatly.lucacsimet');
    Route::post('lucacsimet', [VatlyController::class, 'tinhlucacsimet']);

    Route::get('apsuat', [VatlyController::class, 'apsuat'])->name('vatly.apsuat');
    Route::post('apsuat', [VatlyController::class, 'tinhapsuat']);

    Route::get('congcohoc', [VatlyController::class, 'congcohoc'])->name('vatly.congcohoc');
    Route::post('congcohoc', [VatlyController::class, 'tinhcongcohoc']);

    Route::get('congsuat', [VatlyController::class, 'congsuat'])->name('vatly.congsuat');
    Route::post('congsuat', [VatlyController::class, 'tinhcongsuat']);

    // Nhiệt học
    Route::get('nhietluong', [VatlyController::class, 'nhietluong'])->name('vatly.nhietluong');
    Route::post('nhietluong', [VatlyController::class, 'tinhnhietluong']);

    Route::get('hieusuatdongconhiet', [VatlyController::class, 'hieusuatdongconhiet'])->name('vatly.hieusuatdongconhiet');
    Route::post('hieusuatdongconhiet', [VatlyController::class, 'tinhhieusuatdongconhiet']);

    // Điện học
    Route::get('cuongdodongdien', [VatlyController::class, 'cuongdodongdien'])->name('vatly.cuongdodongdien');
    Route::post('cuongdodongdien', [VatlyController::class, 'tinhcuongdodongdien']);

    Route::get('hieudienthe', [VatlyController::class, 'hieudienthe'])->name('vatly.hieudienthe');
    Route::post('hieudienthe', [VatlyController::class, 'tinhhieudienthe']);

    Route::get('dientro', [VatlyController::class, 'dientro'])->name('vatly.dientro');
    Route::post('dientro', [VatlyController::class, 'tinhdientro']);

    Route::get('congsuatdongdien', [VatlyController::class, 'congsuatdongdien'])->name('vatly.congsuatdongdien');
    Route::post('congsuatdongdien', [VatlyController::class, 'tinhcongsuatdongdien']);

    Route::get('congdongdien', [VatlyController::class, 'congdongdien'])->name('vatly.congdongdien');
    Route::post('congdongdien', [VatlyController::class, 'tinhcongdongdien']);

    Route::get('nhietluongodaydan', [VatlyController::class, 'nhietluongodaydan'])->name('vatly.nhietluongodaydan');
    Route::post('nhietluongodaydan', [VatlyController::class, 'tinhnhietluongodaydan']);

    // Điện từ học
    Route::get('congsuathaophi', [VatlyController::class, 'congsuathaophi'])->name('vatly.congsuathaophi');
    Route::post('congsuathaophi', [VatlyController::class, 'tinhcongsuathaophi']);
});


// Toán
Route::get('/toan', [HomeController::class, 'toan'])->name('toan');
Route::prefix('/toan')->group(function () {
    // Đại số
    // Lũy thừa
    Route::get('luythuamunguyenduong', [ToanController::class, 'luythuamunguyenduong'])->name('toan.luythuamunguyenduong');
    Route::post('luythuamunguyenduong', [ToanController::class, 'tinhluythuamunguyenduong']);

    Route::get('luythuacuamotphanso', [ToanController::class, 'luythuacuamotphanso'])->name('toan.luythuacuamotphanso');
    Route::post('luythuacuamotphanso', [ToanController::class, 'tinhluythuacuamotphanso']);

    Route::get('luythuacuamottich', [ToanController::class, 'luythuacuamottich'])->name('toan.luythuacuamottich');
    Route::post('luythuacuamottich', [ToanController::class, 'tinhluythuacuamottich']);

    Route::get('tichcuahailuythuacungcoso', [ToanController::class, 'tichcuahailuythuacungcoso'])->name('toan.tichcuahailuythuacungcoso');
    Route::post('tichcuahailuythuacungcoso', [ToanController::class, 'tinhtichcuahailuythuacungcoso']);

    Route::get('thuongcuahailuythuacungcoso', [ToanController::class, 'thuongcuahailuythuacungcoso'])->name('toan.thuongcuahailuythuacungcoso');
    Route::post('thuongcuahailuythuacungcoso', [ToanController::class, 'tinhthuongcuahailuythuacungcoso']);


    Route::get('luythuacuamotluythua', [ToanController::class, 'luythuacuamotluythua'])->name('toan.luythuacuamotluythua');
    Route::post('luythuacuamotluythua', [ToanController::class, 'tinhluythuacuamotluythua']);

    // Phương trình
    Route::get('phuongtrinhbachai', [ToanController::class, 'phuongtrinhbachai'])->name('toan.phuongtrinhbachai');
    Route::post('phuongtrinhbachai', [ToanController::class, 'tinhphuongtrinhbachai']);


    // Hình học
    // Tam giác
    Route::get('canhtamgiac', [ToanController::class, 'canhtamgiac'])->name('toan.canhtamgiac');
    Route::post('canhtamgiac', [ToanController::class, 'tinhcanhtamgiac']);

    Route::get('chuvitamgiac', [ToanController::class, 'chuvitamgiac'])->name('toan.chuvitamgiac');
    Route::post('chuvitamgiac', [ToanController::class, 'tinhchuvitamgiac']);

    Route::get('dientichtamgiac', [ToanController::class, 'dientichtamgiac'])->name('toan.dientichtamgiac');
    Route::post('dientichtamgiac', [ToanController::class, 'tinhdientichtamgiac']);

    Route::get('duongcaotamgiac', [ToanController::class, 'duongcaotamgiac'])->name('toan.duongcaotamgiac');
    Route::post('duongcaotamgiac', [ToanController::class, 'tinhduongcaotamgiac']);

    // Tứ giác
    Route::get('chuvitugiac', [ToanController::class, 'chuvitugiac'])->name('toan.chuvitugiac');
    Route::post('chuvitugiac', [ToanController::class, 'tinhchuvitugiac']);

    Route::get('chuvihinhchunhat', [ToanController::class, 'chuvihinhchunhat'])->name('toan.chuvihinhchunhat');
    Route::post('chuvihinhchunhat', [ToanController::class, 'tinhchuvihinhchunhat']);

    Route::get('chuvihinhvuong', [ToanController::class, 'chuvihinhvuong'])->name('toan.chuvihinhvuong');
    Route::post('chuvihinhvuong', [ToanController::class, 'tinhchuvihinhvuong']);

    Route::get('dientichhinhchunhat', [ToanController::class, 'dientichhinhchunhat'])->name('toan.dientichhinhchunhat');
    Route::post('dientichhinhchunhat', [ToanController::class, 'tinhdientichhinhchunhat']);

    Route::get('dientichhinhvuong', [ToanController::class, 'dientichhinhvuong'])->name('toan.dientichhinhvuong');
    Route::post('dientichhinhvuong', [ToanController::class, 'tinhdientichhinhvuong']);

    // Hình tròn
    Route::get('chuvihinhtron', [ToanController::class, 'chuvihinhtron'])->name('toan.chuvihinhtron');
    Route::post('chuvihinhtron', [ToanController::class, 'tinhchuvihinhtron']);

    Route::get('dientichhinhtron', [ToanController::class, 'dientichhinhtron'])->name('toan.dientichhinhtron');
    Route::post('dientichhinhtron', [ToanController::class, 'tinhdientichhinhtron']);

    // Hình khối
    Route::get('dientichxungquanghinhhopchunhat', [ToanController::class, 'dientichxungquanghinhhopchunhat'])->name('toan.dientichxungquanghinhhopchunhat');
    Route::post('dientichxungquanghinhhopchunhat', [ToanController::class, 'tinhdientichxungquanghinhhopchunhat']);

    Route::get('dientichtoanphanhinhhopchunhat', [ToanController::class, 'dientichtoanphanhinhhopchunhat'])->name('toan.dientichtoanphanhinhhopchunhat');
    Route::post('dientichtoanphanhinhhopchunhat', [ToanController::class, 'tinhdientichtoanphanhinhhopchunhat']);

    Route::get('thetichhinhhopchunhat', [ToanController::class, 'thetichhinhhopchunhat'])->name('toan.thetichhinhhopchunhat');
    Route::post('thetichhinhhopchunhat', [ToanController::class, 'tinhthetichhinhhopchunhat']);

    Route::get('dientichxungquanghinhlapphuong', [ToanController::class, 'dientichxungquanghinhlapphuong'])->name('toan.dientichxungquanghinhlapphuong');
    Route::post('dientichxungquanghinhlapphuong', [ToanController::class, 'tinhdientichxungquanghinhlapphuong']);

    Route::get('dientichtoanphanhinhlapphuong', [ToanController::class, 'dientichtoanphanhinhlapphuong'])->name('toan.dientichtoanphanhinhlapphuong');
    Route::post('dientichtoanphanhinhlapphuong', [ToanController::class, 'tinhdientichtoanphanhinhlapphuong']);

    Route::get('thetichhinhlapphuong', [ToanController::class, 'thetichhinhlapphuong'])->name('toan.thetichhinhlapphuong');
    Route::post('thetichhinhlapphuong', [ToanController::class, 'tinhthetichhinhlapphuong']);

    Route::get('dientichxungquanghinhtru', [ToanController::class, 'dientichxungquanghinhtru'])->name('toan.dientichxungquanghinhtru');
    Route::post('dientichxungquanghinhtru', [ToanController::class, 'tinhdientichxungquanghinhtru']);

    Route::get('thetichhinhtru', [ToanController::class, 'thetichhinhtru'])->name('toan.thetichhinhtru');
    Route::post('thetichhinhtru', [ToanController::class, 'tinhthetichhinhtru']);

    Route::get('dientichhinhnon', [ToanController::class, 'dientichhinhnon'])->name('toan.dientichhinhnon');
    Route::post('dientichhinhnon', [ToanController::class, 'tinhdientichhinhnon']);

    Route::get('thetichhinhnon', [ToanController::class, 'thetichhinhnon'])->name('toan.thetichhinhnon');
    Route::post('thetichhinhnon', [ToanController::class, 'tinhthetichhinhnon']);

    Route::get('dientichmatcau', [ToanController::class, 'dientichmatcau'])->name('toan.dientichmatcau');
    Route::post('dientichmatcau', [ToanController::class, 'tinhdientichmatcau']);

    Route::get('thetichhinhcau', [ToanController::class, 'thetichhinhcau'])->name('toan.thetichhinhcau');
    Route::post('thetichhinhcau', [ToanController::class, 'tinhthetichhinhcau']);

   
});


// Hóa
Route::get('/hoa', [HomeController::class, 'hoa'])->name('hoa');
Route::prefix('/hoa')->group(function () {
    // Tính số mol theo ...
    Route::get('moltheokhoiluong', [HoaController::class, 'moltheokhoiluong'])->name('hoa.moltheokhoiluong');
    Route::post('moltheokhoiluong', [HoaController::class, 'tinhmoltheokhoiluong']);

    Route::get('moltheothetich', [HoaController::class, 'moltheothetich'])->name('hoa.moltheothetich');
    Route::post('moltheothetich', [HoaController::class, 'tinhmoltheothetich']);

    Route::get('moltheonongdomolvathetichdungdich', [HoaController::class, 'moltheonongdomolvathetichdungdich'])->name('hoa.moltheonongdomolvathetichdungdich');
    Route::post('moltheonongdomolvathetichdungdich', [HoaController::class, 'tinhmoltheonongdomolvathetichdungdich']);

    Route::get('moltheonongdophantramvakhoiluongdungdich', [HoaController::class, 'moltheonongdophantramvakhoiluongdungdich'])->name('hoa.moltheonongdophantramvakhoiluongdungdich');
    Route::post('moltheonongdophantramvakhoiluongdungdich', [HoaController::class, 'tinhmoltheonongdophantramvakhoiluongdungdich']);


    // Tính nồng độ phần trăm theo ...
    Route::get('nongdophantramtheokhoiluongchattan', [HoaController::class, 'nongdophantramtheokhoiluongchattan'])->name('hoa.nongdophantramtheokhoiluongchattan');
    Route::post('nongdophantramtheokhoiluongchattan', [HoaController::class, 'tinhnongdophantramtheokhoiluongchattan']);

    Route::get('nongdophantramtheonongdomol', [HoaController::class, 'nongdophantramtheonongdomol'])->name('hoa.nongdophantramtheonongdomol');
    Route::post('nongdophantramtheonongdomol', [HoaController::class, 'tinhnongdophantramtheonongdomol']);


    // Tính nồng độ mol theo ...
    Route::get('nongdomoltheosomol', [HoaController::class, 'nongdomoltheosomol'])->name('hoa.nongdomoltheosomol');
    Route::post('nongdomoltheosomol', [HoaController::class, 'tinhnongdomoltheosomol']);

    Route::get('nongdomolmoltheonongdophantram', [HoaController::class, 'nongdomolmoltheonongdophantram'])->name('hoa.nongdomolmoltheonongdophantram');
    Route::post('nongdomolmoltheonongdophantram', [HoaController::class, 'tinhnongdomolmoltheonongdophantram']);


    // Tính khối lượng chất
    Route::get('khoiluongchat', [HoaController::class, 'khoiluongchat'])->name('hoa.khoiluongchat');
    Route::post('khoiluongchat', [HoaController::class, 'tinhkhoiluongchat']);

    Route::get('khoiluongchattan', [HoaController::class, 'khoiluongchattan'])->name('hoa.khoiluongchattan');
    Route::post('khoiluongchattan', [HoaController::class, 'tinhkhoiluongchattan']);


    // Tính thể tích dung dịch theo ...
    Route::get('thetichdungdichtheonongdomol', [HoaController::class, 'thetichdungdichtheonongdomol'])->name('hoa.thetichdungdichtheonongdomol');
    Route::post('thetichdungdichtheonongdomol', [HoaController::class, 'tinhthetichdungdichtheonongdomol']);

    Route::get('thetichdungdichtheokhoiluongdungdich', [HoaController::class, 'thetichdungdichtheokhoiluongdungdich'])->name('hoa.thetichdungdichtheokhoiluongdungdich');
    Route::post('thetichdungdichtheokhoiluongdungdich', [HoaController::class, 'tinhthetichdungdichtheokhoiluongdungdich']);


    // Tính thành phần % về khối lượng các chất trong hỗn hợp
    Route::get('phantramkhoiluongchata', [HoaController::class, 'phantramkhoiluongchata'])->name('hoa.phantramkhoiluongchata');
    Route::post('phantramkhoiluongchata', [HoaController::class, 'tinhphantramkhoiluongchata']);
});


//đăng nhập
Route::get('/login', function () {
     echo "đăng nhập";
    })->name('login');

Route::middleware('auth.admin')->prefix('/admin')->group(function () {


    Route::resource('lythuyet',LythuyetController::class);

    Route::resource('hinh',LythuyetController::class);

    Route::resource('user',LythuyetController::class);
});
