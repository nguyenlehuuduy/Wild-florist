<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SinhvienController;
use App\Http\Controllers\NhanvienController;
use App\Http\Controllers\SanphamController;
use App\Http\Controllers\DonhangController;
use App\Http\Controllers\LuongController;
use GuzzleHttp\Middleware;

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

Route::get('/', function () {
    return view('admin_login');
});


Route::resource('/sinhvien', SinhvienController::class);
Route::resource('/nhanvien', NhanvienController::class);
Route::resource('/sanpham', SanphamController::class);
Route::resource('/donhang', DonhangController::class);
Route::resource('/luong', LuongController::class);


// Route::get('/login',[AuthController::class,'login']);
Route::get('/login', [AuthController::class, 'login']);
// ->middleware('alreadyloggedIn');
Route::get('/register', [AuthController::class, 'register']);
// ->middleware('alreadyloggedIn');
Route::post('/register-user', [AuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [AuthController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard', [AuthController::class, 'dashboard']);
// ->middleware('isloggedIn');
Route::get('/logout', [AuthController::class, 'logout']);
// 

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'show_dashboard']);
Route::post('/admin-dashboard', [AdminController::class, 'dashboard']);


Route::get('/form-add-bi-cam', [AdminController::class, 'form_add_bi_cam']);
Route::get('/form-add-don-hang', [AdminController::class, 'form_add_don_hang']);
Route::get('/form-add-nhan-vien', [AdminController::class, 'form_add_nhan_vien']);
Route::get('/form-add-khach-hang', [AdminController::class, 'form_add_khach_hang']);
Route::get('/form-add-san-pham', [AdminController::class, 'form_add_san_pham']);
Route::get('/form-add-tien-luong', [AdminController::class, 'form_add_tien_luong']);
Route::get('/page-calendar', [AdminController::class, 'page_calendar']);
Route::get('/phan-mem-ban-hang', [AdminController::class, 'phan_mem_ban_hang']);
Route::get('/quan-ly-bao-cao', [AdminController::class, 'quan_ly_bao_cao']);
Route::get('/table-data-banned', [AdminController::class, 'table_data_banned']);
Route::get('/table-data-money', [AdminController::class, 'table_data_money']);
Route::get('table-data-oder', [AdminController::class, 'table_data_oder']);
Route::get('/table-data-product', [AdminController::class, 'table_data_product']);
Route::get('/table-data-table', [AdminController::class, 'table_data_table']);
Route::get('/table-data-table1', [AdminController::class, 'table_data_table1']);