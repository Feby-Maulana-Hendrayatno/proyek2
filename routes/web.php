<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelatihController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AkunController;
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

Route::get("/layouts", function() {
	return view("/layouts/template");
});

Route::get('/dashboard', function () {
    return view('/admin/dashboard');
})->middleware('admin');

// login adminController
Route::get('/logout', [loginController::class, "logout"]);

Route::get("/login", [LoginController::class, "login"])->middleware('guest');

Route::POST("/post_login", [LoginController::class, "post_login"] );

Route::get('pelatih/addpelatih', function () {

    return view('/admin/pelatih/addpelatih');
})->middleware('admin');

Route::get('/murid', function () {
    return view('/admin/murid');
})->middleware('admin');

Route::get("/admin", [AdminController::class, "dashboard"] )->middleware('admin');
Route::delete('{pelatih}/delete','PelatiCotroller@destroy')->name('pelatih.destroy')->middleware('admin');


//Data Murid
Route::get('/murid', [MuridController::class, 'index'])->middleware('admin');
Route::get("/murid/edit/{id}", [MuridController::class, 'edit'])->middleware('admin');
Route::get('/murid/hapus/{id}', [MuridController::class, 'destroy'])->middleware('admin');
Route::post('/murid/update', [MuridController::class, 'update'])->middleware('admin');

Route::post('murid/add', [MuridController::class, 'store'])->middleware('admin');

Route::get('murid/addmurid', function () {

    return view('/admin/murid/addmurid');
})->middleware('admin');

Route::get("/admin", [AdminController::class, "dashboard"] )->middleware('admin');
Route::delete('{murid}/delete','MuridCotroller@destroy')->name('murid.destroy')->middleware('admin');

// kalendar
Route::get('full-calender', [FullCalenderController::class, 'index']);
Route::post('full-calender/action', [FullCalenderController::class, 'action']);

Route::prefix("admin")->group(function() {

    Route::prefix("users")->group(function() {
        Route::get("/", [AkunController::class, "index"]);
    });

    Route::prefix("role")->group(function() {
        Route::get("/", [RoleController::class, "index"]);
        Route::post("/tambah/", [RoleController::class, "tambah"]);
        Route::post("/hapus", [RoleController::class, "hapus"]);
        Route::get("/edit/{id_role}", [RoleController::class, "edit"]);
        Route::post("/simpan", [RoleController::class, "simpan"]);
    });

    Route::prefix("pelatih")->group(function() {
        Route::get("/", [PelatihController::class, "index"]);
        Route::post("/store", [PelatihController::class, "store"]);
        Route::get("/tambah_data", [PelatihController::class, "tambah_data"]);
    });

});

Route::get("/admin", [RoleController::class, "dashboard"] )->middleware('admin');
