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
    Route::get('congsuathaophi', [VatlyController::class, 'congsuathaophi'])->name('vatly.congsuathaophi');
    Route::post('congsuathaophi', [VatlyController::class, 'tinhcongsuathaophi']);
});


Route::get('/toan', [HomeController::class, 'toan'])->name('toan');
Route::prefix('/toan')->group(function () {
    Route::get('luythuamunguyenduong', [ToanController::class, 'luythuamunguyenduong'])->name('toan.luythuamunguyenduong');
    Route::post('luythuamunguyenduong', [ToanController::class, 'tinhluythuamunguyenduong']);
});


Route::get('/hoa', [HomeController::class, 'hoa'])->name('hoa');
Route::prefix('/hoa')->group(function () {
    Route::get('moltheokhoiluong', [HoaController::class, 'moltheokhoiluong'])->name('hoa.moltheokhoiluong');
    Route::post('moltheokhoiluong', [HoaController::class, 'tinhmoltheokhoiluong']);
});
