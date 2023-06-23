<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VatlyController;
use App\Http\Controllers\ToanController;
use App\Http\Controllers\HoaController;
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


Route::get('/vatly', [HomeController::class, 'vatly'])->name('vatly');
Route::prefix('/vatly')->group(function () {
    Route::get('dodai', [VatlyController::class, 'dodai'])->name('vatly.dodai');
    Route::post('dodai', [VatlyController::class, 'doidodai']);
    Route::get('thetich', [VatlyController::class, 'thetich'])->name('vatly.thetich');
    Route::post('thetich', [VatlyController::class, 'doithetich']);
    Route::get('khoiluong', [VatlyController::class, 'khoiluong'])->name('vatly.khoiluong');
    Route::post('khoiluong', [VatlyController::class, 'doikhoiluong']);
    Route::get('khoiluongrieng', [VatlyController::class, 'khoiluongrieng'])->name('vatly.khoiluongrieng');
    Route::post('khoiluongrieng', [VatlyController::class, 'tinhkhoiluongrieng']);
    Route::get('trongluongrieng', [VatlyController::class, 'trongluongrieng'])->name('vatly.trongluongrieng');
    Route::post('trongluongrieng', [VatlyController::class, 'tinhtrongluongrieng']);
    Route::get('congcohoc', [VatlyController::class, 'congcohoc'])->name('vatly.congcohoc');
    Route::post('congcohoc', [VatlyController::class, 'tinhcongcohoc']);
    Route::get('nhietluong', [VatlyController::class, 'nhietluong'])->name('vatly.nhietluong');
    Route::post('nhietluong', [VatlyController::class, 'tinhnhietluong']);
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
    Route::get('congsuat', [VatlyController::class, 'congsuat'])->name('vatly.congsuat');
    Route::post('congsuat', [VatlyController::class, 'tinhcongsuat']);
    Route::get('hieusuatdongconhiet', [VatlyController::class, 'hieusuatdongconhiet'])->name('vatly.hieusuatdongconhiet');
    Route::post('hieusuatdongconhiet', [VatlyController::class, 'tinhhieusuatdongconhiet']);
    Route::get('cuongdodongdien', [VatlyController::class, 'cuongdodongdien'])->name('vatly.cuongdodongdien');
    Route::post('cuongdodongdien', [VatlyController::class, 'tinhcuongdodongdien']);
    Route::get('hieudienthe', [VatlyController::class, 'hieudienthe'])->name('vatly.hieudienthe');
    Route::post('hieudienthe', [VatlyController::class, 'tinhhieudienthe']);
    Route::get('dientro', [VatlyController::class, 'dientro'])->name('vatly.dientro');
    Route::post('dientro', [VatlyController::class, 'tinhdientro']);
    Route::get('congsuathaophi', [VatlyController::class, 'congsuathaophi'])->name('vatly.congsuathaophi');
    Route::post('congsuathaophi', [VatlyController::class, 'tinhcongsuathaophi']);
    Route::get('nhietluongodaydan', [VatlyController::class, 'nhietluongodaydan'])->name('vatly.nhietluongodaydan');
    Route::post('nhietluongodaydan', [VatlyController::class, 'tinhnhietluongodaydan']);
});


Route::get('/toan', [HomeController::class, 'toan'])->name('toan');
Route::prefix('/toan')->group(function () {
    Route::get('luythuamunguyenduong', [ToanController::class, 'luythuamunguyenduong'])->name('toan.luythuamunguyenduong');
    Route::post('luythuamunguyenduong', [ToanController::class, 'tinhluythuamunguyenduong']);
    Route::get('luythuacuamotphanso', [ToanController::class, 'luythuacuamotphanso'])->name('toan.luythuacuamotphanso');
    Route::post('luythuacuamotphanso', [ToanController::class, 'tinhluythuacuamotphanso']);
    Route::get('luythuacuamottich', [ToanController::class, 'luythuacuamottich'])->name('toan.luythuacuamottich');
    Route::post('luythuacuamottich', [ToanController::class, 'tinhluythuacuamottich']);
    Route::get('luythuacuamotluythua', [ToanController::class, 'luythuacuamotluythua'])->name('toan.luythuacuamotluythua');
    Route::post('luythuacuamotluythua', [ToanController::class, 'tinhluythuacuamotluythua']);
    Route::get('tichcuahailuythuacungcoso', [ToanController::class, 'tichcuahailuythuacungcoso'])->name('toan.tichcuahailuythuacungcoso');
    Route::post('tichcuahailuythuacungcoso', [ToanController::class, 'tinhtichcuahailuythuacungcoso']);
    Route::get('thuongcuahailuythuacungcoso', [ToanController::class, 'thuongcuahailuythuacungcoso'])->name('toan.thuongcuahailuythuacungcoso');
    Route::post('thuongcuahailuythuacungcoso', [ToanController::class, 'tinhthuongcuahailuythuacungcoso']);
    Route::get('phuongtrinhbachai', [ToanController::class, 'phuongtrinhbachai'])->name('toan.phuongtrinhbachai');
    Route::post('phuongtrinhbachai', [ToanController::class, 'tinhphuongtrinhbachai']);
    Route::get('duongcaotamgiac', [ToanController::class, 'duongcaotamgiac'])->name('toan.duongcaotamgiac');
    Route::post('duongcaotamgiac', [ToanController::class, 'tinhduongcaotamgiac']);
    Route::get('thetichhinhtru', [ToanController::class, 'thetichhinhtru'])->name('toan.thetichhinhtru');
    Route::post('thetichhinhtru', [ToanController::class, 'tinhthetichhinhtru']);
    Route::get('thetichhinhnon', [ToanController::class, 'thetichhinhnon'])->name('toan.thetichhinhnon');
    Route::post('thetichhinhnon', [ToanController::class, 'tinhthetichhinhnon']);
    Route::get('thetichhinhcau', [ToanController::class, 'thetichhinhcau'])->name('toan.thetichhinhcau');
    Route::post('thetichhinhcau', [ToanController::class, 'tinhthetichhinhcau']);
});


Route::get('/hoa', [HomeController::class, 'hoa'])->name('hoa');
Route::prefix('/hoa')->group(function () {
    Route::get('moltheokhoiluong', [HoaController::class, 'moltheokhoiluong'])->name('hoa.moltheokhoiluong');
    Route::post('moltheokhoiluong', [HoaController::class, 'tinhmoltheokhoiluong']);

    Route::get('moltheonongdomolvathetichdungdich', [HoaController::class, 'moltheonongdomolvathetichdungdich'])->name('hoa.moltheonongdomolvathetichdungdich');
    Route::post('moltheonongdomolvathetichdungdich', [HoaController::class, 'tinhmoltheonongdomolvathetichdungdich']);

    Route::get('nongdomoltheosomol', [HoaController::class, 'nongdomoltheosomol'])->name('hoa.nongdomoltheosomol');
    Route::post('nongdomoltheosomol', [HoaController::class, 'tinhnongdomoltheosomol']);
});
