<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\LinhVucController; 
use App\Http\Controllers\YTeController; 
use App\Http\Controllers\GiaoDucController; 
use App\Http\Controllers\DuAnController; 
use App\Http\Controllers\KenhTruyenController; 
use App\Http\Controllers\ChiTieuController;
use App\Http\Controllers\ThucHienController;
use App\Http\Controllers\CTrinhHDController;
use App\Http\Controllers\NhanvienController;
use App\Http\Controllers\DichvuController;
use App\Http\Controllers\DoanhnghiepController;
use App\Http\Controllers\DangkydichvuController;
use App\Http\Controllers\KhuyenmaiController;
use App\Http\Controllers\UserController;

Auth::routes();

Route::get('/', [HomeController::class, 'getHome'])->name('home');
Route::get('/showchuongtrinh/{id}', [HomeController::class, 'showchuongtrinh'])->name('home.showchuongtrinh');
Route::get('/chitieu', [ChiTieuController::class, 'getDanhSach'])->name('chitieu');
Route::get('/chitieu/them', [ChiTieuController::class, 'getThem'])->name('chitieu.them');
Route::post('/chitieu/them', [ChiTieuController::class, 'postThem'])->name('chitieu.them');
Route::get('/chitieu/sua/{id}', [ChiTieuController::class, 'getSua'])->name('chitieu.sua');
Route::post('/chitieu/sua/{id}', [ChiTieuController::class, 'postSua'])->name('chitieu.sua');
Route::get('/chitieu/xoa/{id}', [ChiTieuController::class, 'getXoa'])->name('chitieu.xoa');
Route::post('/chitieu/nhap', [ChiTieuController::class, 'postNhap'])->name('chitieu.nhap');

Route::get('/thuchien', [ThucHienController::class, 'getDanhSach'])->name('thuchien');
Route::get('/thuchien/them', [ThucHienController::class, 'getThem'])->name('thuchien.them');
Route::post('/thuchien/them', [ThucHienController::class, 'postThem'])->name('thuchien.them');
Route::get('/thuchien/sua/{id}', [ThucHienController::class, 'getSua'])->name('thuchien.sua');
Route::post('/thuchien/sua/{id}', [ThucHienController::class, 'postSua'])->name('thuchien.sua');
Route::get('/thuchien/xoa/{id}', [ThucHienController::class, 'getXoa'])->name('thuchien.xoa');
Route::post('/thuchien/nhap', [ThucHienController::class, 'postNhap'])->name('thuchien.nhap');

Route::get('/chuongtrinh', [CTrinhHDController::class, 'getDanhSach'])->name('chuongtrinh');
Route::get('/chuongtrinh/them', [CTrinhHDController::class, 'getThem'])->name('chuongtrinh.them');
Route::post('/chuongtrinh/them', [CTrinhHDController::class, 'postThem'])->name('chuongtrinh.them');
Route::get('/chuongtrinh/sua/{id}', [CTrinhHDController::class, 'getSua'])->name('chuongtrinh.sua');
Route::post('/chuongtrinh/sua/{id}', [CTrinhHDController::class, 'postSua'])->name('chuongtrinh.sua');
Route::get('/chuongtrinh/xoa/{id}', [CTrinhHDController::class, 'getXoa'])->name('chuongtrinh.xoa');
Route::post('/chuongtrinh/nhap', [CTrinhHDController::class, 'postNhap'])->name('chuongtrinh.nhap');

Route::get('/user', [UserController::class, 'getDanhSach'])->name('user');
Route::get('/user/them', [UserController::class, 'getThem'])->name('user.them');
Route::post('/user/them', [UserController::class, 'postThem'])->name('user.them');
Route::get('/user/sua/{id}', [UserController::class, 'getSua'])->name('user.sua');
Route::post('/user/sua/{id}', [UserController::class, 'postSua'])->name('user.sua');
Route::get('/user/xoa/{id}', [UserController::class, 'getXoa'])->name('user.xoa');

Route::get('/nhanvien', [NhanvienController::class, 'index'])->name('nhanvien');
Route::get('/nhanvien/them', [NhanvienController::class, 'create'])->name('nhanvien.create');
Route::post('/nhanvien/them', [NhanvienController::class, 'store'])->name('nhanvien.store');
Route::get('/nhanvien/sua/{id}', [NhanvienController::class, 'edit'])->name('nhanvien.edit');
Route::post('/nhanvien/sua/{id}', [NhanvienController::class, 'update'])->name('nhanvien.update');
Route::get('/nhanvien/xoa/{id}', [NhanvienController::class, 'destroy'])->name('nhanvien.destroy');

Route::get('/dichvu', [DichvuController::class, 'index'])->name('dichvu');
Route::get('/dichvu/them', [DichvuController::class, 'create'])->name('dichvu.create');
Route::post('/dichvu/them', [DichvuController::class, 'store'])->name('dichvu.store');
Route::get('/dichvu/sua/{id}', [DichvuController::class, 'edit'])->name('dichvu.edit');
Route::post('/dichvu/sua/{id}', [DichvuController::class, 'update'])->name('dichvu.update');
Route::get('/dichvu/xoa/{id}', [DichvuController::class, 'destroy'])->name('dichvu.destroy');
Route::post('/dichvu/nhap', [DichvuController::class, 'postNhap'])->name('dichvu.nhap');
Route::get('/dichvu/nhap', [DichvuController::class, 'getXuat'])->name('dichvu.xuat');


Route::get('/doanhnghiep', [DoanhnghiepController::class, 'index'])->name('doanhnghiep');
Route::get('/doanhnghiep/them', [DoanhnghiepController::class, 'create'])->name('doanhnghiep.create');
Route::post('/doanhnghiep/them', [DoanhnghiepController::class, 'store'])->name('doanhnghiep.store');
Route::get('/doanhnghiep/sua/{id}', [DoanhnghiepController::class, 'edit'])->name('doanhnghiep.edit');
Route::post('/doanhnghiep/sua/{id}', [DoanhnghiepController::class, 'update'])->name('doanhnghiep.update');
Route::get('/doanhnghiep/xoa/{id}', [DoanhnghiepController::class, 'destroy'])->name('doanhnghiep.destroy');
Route::post('/doanhnghiep/nhap', [DoanhnghiepController::class, 'postNhap'])->name('doanhnghiep.nhap');
Route::get('/doanhnghiep/nhap', [DoanhnghiepController::class, 'getXuat'])->name('doanhnghiep.xuat');

Route::get('/dangkydichvu', [DangkydichvuController::class, 'index'])->name('dangkydichvu');
Route::get('/dangkydichvu/them', [DangkydichvuController::class, 'create'])->name('dangkydichvu.create');
Route::post('/dangkydichvu/them', [DangkydichvuController::class, 'store'])->name('dangkydichvu.store');
Route::get('/dangkydichvu/sua/{id}', [DangkydichvuController::class, 'edit'])->name('dangkydichvu.edit');
Route::get('/dangkydichvu/xem/{id}', [DangkydichvuController::class, 'show'])->name('dangkydichvu.show');
Route::post('/dangkydichvu/sua/{id}', [DangkydichvuController::class, 'update'])->name('dangkydichvu.update');
Route::get('/dangkydichvu/xoa/{id}', [DangkydichvuController::class, 'destroy'])->name('dangkydichvu.destroy');
Route::post('/dangkydichvu/nhap', [DangkydichvuController::class, 'postNhap'])->name('dangkydichvu.nhap');
Route::get('/dangkydichvu/nhap', [DangkydichvuController::class, 'getXuat'])->name('dangkydichvu.xuat');
Route::get('/dangkydichvu/in/{id}', [DangkydichvuController::class, 'getIn'])->name('dangkydichvu.in');
Route::get('/dangkydichvu/hopdong', [DangkydichvuController::class, 'hopdong'])->name('dangkydichvu.hopdong');

Route::get('/khuyenmai', [KhuyenmaiController::class, 'index'])->name('khuyenmai');
Route::get('/khuyenmai/them', [KhuyenmaiController::class, 'create'])->name('khuyenmai.create');
Route::post('/khuyenmai/them', [KhuyenmaiController::class, 'store'])->name('khuyenmai.store');
Route::get('/khuyenmai/sua/{id}', [KhuyenmaiController::class, 'edit'])->name('khuyenmai.edit');
Route::post('/khuyenmai/sua/{id}', [KhuyenmaiController::class, 'update'])->name('khuyenmai.update');
Route::get('/khuyenmai/xoa/{id}', [KhuyenmaiController::class, 'destroy'])->name('khuyenmai.destroy');
Route::post('/khuyenmai/nhap', [KhuyenmaiController::class, 'postNhap'])->name('khuyenmai.nhap');
Route::get('/khuyenmai/nhap', [KhuyenmaiController::class, 'getXuat'])->name('khuyenmai.xuat');
