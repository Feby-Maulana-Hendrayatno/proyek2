<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelatihController;
use App\Http\Controllers\AdminController;
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
});

// Data Pelatih
Route::get('/pelatih', [PelatihController::class, 'index']);
Route::get("/pelatih/edit/{id}", [PelatihController::class, 'edit']);
Route::get('/pelatih/hapus/{id}', [PelatihController::class, 'destroy']);
Route::post('/pelatih/update', [PelatihController::class, 'update']);

Route::post('/add', [PelatihController::class, 'store']);

Route::get('/addpelatih', function () {

    return view('/admin/addpelatih');
});

Route::get('/murid', function () {
    return view('/admin/murid');
});

Route::get("/admin", [AdminController::class, "dashboard"] );
Route::delete('{pelatih}/delete','PelatiCotroller@destroy')->name('pelatih.destroy');


//Data Murid
Route::get('/murid', [PelatihController::class, 'index']);
Route::get("/murid/edit/{id}", [PelatihController::class, 'edit']);
Route::get('/murid/hapus/{id}', [PelatihController::class, 'destroy']);
Route::post('/murid/update', [PelatihController::class, 'update']);

Route::post('/add', [PelatihController::class, 'store']);

Route::get('/addmurid', function () {

    return view('/admin/addmurid');
});

Route::get('/murid', function () {
    return view('/admin/murid');
});

Route::get("/admin", [AdminController::class, "dashboard"] );
Route::delete('{murid}/delete','PelatiCotroller@destroy')->name('murid.destroy');