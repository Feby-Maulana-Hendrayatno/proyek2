<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelatihController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\KategoriTariController;
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
    return view('/admin/dashboard');
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





// kalendar
Route::get('full-calender', [FullCalenderController::class, 'index']);
Route::post('full-calender/action', [FullCalenderController::class, 'action']);

Route::prefix("admin")->group(function() {

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
        Route::get("/edit/{id}", [PelatihController::class, "edit"]);
        Route::get("/hapus/{id}/", [PelatihController::class, "destroy"]);
        Route::post("/update", [PelatihController::class, "update"]);
    });

    Route::prefix("murid")->group(function() {
        Route::get("/", [MuridController::class, "index"]);
        Route::post("/store", [MuridController::class, "store"]);
        Route::get("/tambah_data", [MuridController::class, "tambah_data"]);
        Route::get("/edit/{id}", [MuridController::class, "edit"]);
        Route::get("/hapus/{id}/", [MuridController::class, "destroy"]);
        Route::post("/update", [MuridController::class, "update"]);
    });

});








Route::prefix("pelatih")->group(function() {

    Route::prefix("kategori_tari")->group(function() {
        Route::get("/", [KategoriTariController::class, "index"]);
        Route::post("/tambah/", [KategoriTariController::class, "tambah"]);
        Route::post("/hapus", [KategoriTariController::class, "hapus"]);
        Route::get("/edit/{id_role}", [KategoriTariController::class, "edit"]);
        Route::post("/simpan", [KategoriTariController::class, "simpan"]);
    });

});