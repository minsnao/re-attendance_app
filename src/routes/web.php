<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminAttendanceListController;
use App\Http\Controllers\StaffUserController;
use App\Http\Controllers\ShowRequestsController;

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
Route::middleware('guest.admin')->group(function(){
    Route::get('/admin/login', [AdminAuthController::class, 'LoginForm']);
    Route::post('/admin/login', [AdminAuthController::class, 'login']);

});
Route::post('/admin/logout', [AdminAuthController::class, 'logout']);


// 一般会員のみ
Route::middleware(['auth', 'role:employee'])->group(function () {

});

// 管理者のみ
Route::middleware(['auth', 'role:admin'])->group(function () {

});


Route::get('/admin/login', [AdminAuthController::class, 'adminLogin']);
// Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::get('/admin/attendances', [AdminAttendanceListController::class, 'index']);

Route::get('/admin/users', [StaffUserController::class, 'index']);

Route::get('/admin/requests', [ShowRequestsController::class, 'index']);


Route::get('/attendance', [AttendanceController::class, 'index']);


// Fortify準拠による設定で "/" はログインフォームへ
Route::get('/', function () {
    return redirect('/login');
});






// Route::get('/', function () {return view('welcome');});
