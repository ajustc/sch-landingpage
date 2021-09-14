<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\VisiController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\FooterController;
use Illuminate\Support\Facades\Route;

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

Route::get("/", [UserController::class, 'index']);
Route::get("/adminpages", [AuthController::class, 'index']);

Route::get("/adminpages/login", [AuthController::class, 'login']);
Route::post("/adminpages/loginstore", [AuthController::class, 'loginstore']);
Route::get("/adminpages/register", [AuthController::class, 'register']);
Route::post("/adminpages/registerstore", [AuthController::class, 'registerstore']);
Route::get("/adminpages/logout", [AuthController::class, 'logout']);

Route::get("/adminpages/banner", [BannerController::class, 'index']);
Route::get("/adminpages/banner/create", [BannerController::class, 'create']);
Route::post("/adminpages/banner", [BannerController::class, 'store']);
Route::get("/adminpages/banner/{data}/edit", [BannerController::class, 'edit']);
Route::post("/adminpages/banner/{data}", [BannerController::class, 'update']);
Route::delete("/adminpages/banner/{data}", [BannerController::class, 'destroy']);

Route::get("/adminpages/visi", [VisiController::class, 'index']);

Route::get("/admin/pendaftaran", [AdminController::class, 'pendaftaran']);

Route::get("/admin/biografi", [AdminController::class, 'biografi']);

Route::get("/admin/kegiatan", [AdminController::class, 'kegiatan']);

Route::get("/adminpages/footer", [FooterController::class, 'index']);
Route::get("/adminpages/footer/create", [FooterController::class, 'create']);
Route::post("/adminpages/footer", [FooterController::class, 'store']);
Route::get("/adminpages/footer/{data}/edit", [FooterController::class, 'edit']);
Route::post("/adminpages/footer/{data}", [FooterController::class, 'update']);
Route::delete("/adminpages/footer/{data}", [FooterController::class, 'destroy']);