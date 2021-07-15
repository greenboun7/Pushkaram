<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NoticeBoardController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\EventPartnerController;

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
    return view('welcome');
});


Route::get('/courses', function () {
    return view('courses');
});


// Routes for Admin
Route::group(['prefix' => 'portal'], function () {
    Route::get("/",[AdminController::class,'index']);
    Route::post("/login",[AdminController::class,'login']);

    Route::get("/dashboard",[AdminController::class,'dashboard']);

    Route::prefix('category')->group(function () {
        Route::get("/",[CategoryController::class,'index']);
        Route::get("/getDtdata",[CategoryController::class,'getDtdata']);
        Route::get("/getDDdata",[CategoryController::class,'getDDdata']);
        Route::post("/store",[CategoryController::class,'store']);
        Route::post("/update",[CategoryController::class,'update']);
    });

    Route::prefix('products')->group(function () {
        Route::get("/",[ProductController::class,'index']);
        Route::get("/getDtdata",[ProductController::class,'getDtdata']);
        Route::post("/store",[ProductController::class,'store']);
        Route::post("/update",[ProductController::class,'update']);
    });

    Route::prefix('banner')->group(function () {
        Route::get("/",[BannerController::class,'index']);
        Route::get("/getDtdata",[BannerController::class,'getDtdata']);
        Route::post("/store",[BannerController::class,'store']);
        Route::post("/update",[BannerController::class,'update']);
    });

    Route::prefix('notice')->group(function () {
        Route::get("/",[NoticeBoardController::class,'index']);
        Route::get("/getDtdata",[NoticeBoardController::class,'getDtdata']);
        Route::post("/store",[NoticeBoardController::class,'store']);
        Route::post("/update",[NoticeBoardController::class,'update']);
    });

    Route::prefix('team')->group(function () {
        Route::get("/",[TeamMemberController::class,'index']);
        Route::get("/getDtdata",[TeamMemberController::class,'getDtdata']);
        Route::post("/store",[TeamMemberController::class,'store']);
        Route::post("/update",[TeamMemberController::class,'update']);
    });

    Route::prefix('eventpartner')->group(function () {
        Route::get("/",[EventPartnerController::class,'index']);
        Route::get("/getDtdata",[EventPartnerController::class,'getDtdata']);
        Route::post("/store",[EventPartnerController::class,'store']);
        Route::post("/update",[EventPartnerController::class,'update']);
    });

    Route::prefix('users')->group(function () {
        Route::get("/",[AdminController::class,'users_list']);
        Route::get("/getDtdata",[UsersController::class,'getDtdata']);
    });
});
