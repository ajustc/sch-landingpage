<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\VisiController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\PriceController;
use App\Http\Controllers\Admin\TitlePriceController;
use App\Http\Controllers\Admin\GraduetController;
use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\BiograpyController;
use App\Http\Controllers\Admin\ListBiograpyController;
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

// AUTH
Route::get("/adminpages/login", [AuthController::class, 'login']);
Route::post("/adminpages/loginstore", [AuthController::class, 'loginstore']);
Route::get("/adminpages/register", [AuthController::class, 'register']);
Route::post("/adminpages/registerstore", [AuthController::class, 'registerstore']);
Route::get("/adminpages/logout", [AuthController::class, 'logout']);

// Banner
Route::get("/adminpages/banner", [BannerController::class, 'index']);
Route::get("/adminpages/banner/create", [BannerController::class, 'create']);
Route::post("/adminpages/banner", [BannerController::class, 'store']);
Route::get("/adminpages/banner/{data}/edit", [BannerController::class, 'edit']);
Route::post("/adminpages/banner/{data}", [BannerController::class, 'update']);
Route::delete("/adminpages/banner/{data}", [BannerController::class, 'destroy']);

// Visi Misi
Route::get("/adminpages/visimisi", [VisiController::class, 'index']);
Route::get("/adminpages/visimisi/create", [VisiController::class, 'create']);
Route::post("/adminpages/visimisi", [VisiController::class, 'store']);
Route::get("/adminpages/visimisi/{data}/edit", [VisiController::class, 'edit']);
Route::post("/adminpages/visimisi/{data}", [VisiController::class, 'update']);
Route::delete("/adminpages/visimisi/{data}", [VisiController::class, 'destroy']);

//biograpylist
Route::get("/adminpages/biograpylist", [ListBiograpyController::class, 'index']);
Route::get("/adminpages/biograpylist/create", [ListBiograpyController::class, 'create']);
Route::post("/adminpages/biograpylist", [ListBiograpyController::class, 'store']);
Route::get("/adminpages/biograpylist/{data}/edit", [ListBiograpyController::class, 'edit']);
Route::post("/adminpages/biograpylist/{data}", [ListBiograpyController::class, 'update']);
Route::delete("/adminpages/biograpylist/{data}", [ListBiograpyController::class, 'destroy']);


//biograpy
Route::get("/adminpages/biograpy", [BiograpyController::class, 'index']);
Route::get("/adminpages/biograpy/create", [BiograpyController::class, 'create']);
Route::post("/adminpages/biograpy", [BiograpyController::class, 'store']);
Route::get("/adminpages/biograpy/{data}/edit", [BiograpyController::class, 'edit']);
Route::post("/adminpages/biograpy/{data}", [BiograpyController::class, 'update']);
Route::delete("/adminpages/biograpy/{data}", [BiograpyController::class, 'destroy']);


//activity
Route::get("/adminpages/activity", [ActivityController::class, 'index']);
Route::get("/adminpages/activity/create", [ActivityController::class, 'create']);
Route::post("/adminpages/activity", [ActivityController::class, 'store']);
Route::get("/adminpages/activity/{data}/edit", [ActivityController::class, 'edit']);
Route::post("/adminpages/activity/{data}", [ActivityController::class, 'update']);
Route::delete("/adminpages/activity/{data}", [ActivityController::class, 'destroy']);

//graduet
Route::get("/adminpages/graduet", [GraduetController::class, 'index']);
Route::get("/adminpages/graduet/create", [GraduetController::class, 'create']);
Route::post("/adminpages/graduet", [GraduetController::class, 'store']);
Route::get("/adminpages/graduet/{data}/edit", [GraduetController::class, 'edit']);
Route::post("/adminpages/graduet/{data}", [GraduetController::class, 'update']);
Route::delete("/adminpages/graduet/{data}", [GraduetController::class, 'destroy']);

//price
Route::get("/adminpages/price", [PriceController::class, 'index']);
Route::get("/adminpages/price/create", [PriceController::class, 'create']);
Route::post("/adminpages/price", [PriceController::class, 'store']);
Route::get("/adminpages/price/{data}/edit", [PriceController::class, 'edit']);
Route::post("/adminpages/price/{data}", [PriceController::class, 'update']);
Route::delete("/adminpages/price/{data}", [PriceController::class, 'destroy']);

//title price
Route::get("/adminpages/pricetitle", [TitlePriceController::class, 'index']);
Route::get("/adminpages/pricetitle/create", [TitlePriceController::class, 'create']);
Route::post("/adminpages/pricetitle", [TitlePriceController::class, 'store']);
Route::get("/adminpages/pricetitle/{data}/edit", [TitlePriceController::class, 'edit']);
Route::post("/adminpages/pricetitle/{data}", [TitlePriceController::class, 'update']);
Route::delete("/adminpages/pricetitle/{data}", [TitlePriceController::class, 'destroy']);

//contact
Route::get("/adminpages/contact", [ContactController::class, 'index']);
Route::get("/adminpages/contact/create", [ContactController::class, 'create']);
Route::post("/adminpages/contact", [ContactController::class, 'store']);
Route::get("/adminpages/contact/{data}/edit", [ContactController::class, 'edit']);
Route::post("/adminpages/contact/{data}", [ContactController::class, 'update']);
Route::delete("/adminpages/contact/{data}", [ContactController::class, 'destroy']);

//footer
Route::get("/adminpages/footer", [FooterController::class, 'index']);
Route::get("/adminpages/footer/create", [FooterController::class, 'create']);
Route::post("/adminpages/footer", [FooterController::class, 'store']);
Route::get("/adminpages/footer/{data}/edit", [FooterController::class, 'edit']);
Route::post("/adminpages/footer/{data}", [FooterController::class, 'update']);
Route::delete("/adminpages/footer/{data}", [FooterController::class, 'destroy']);