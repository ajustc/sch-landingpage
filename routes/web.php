<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserAdmin;
use App\Http\Controllers\User\UserController;
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
Route::get("/adminpages", [AdminController::class, 'index']);



Route::get("/adminpages/login", [UserAdmin::class, 'login']);
Route::post("/adminpages/loginstore", [UserAdmin::class, 'loginstore']);
Route::get("/adminpages/register", [UserAdmin::class, 'register']);
Route::post("/adminpages/registerstore", [UserAdmin::class, 'registerstore']);
