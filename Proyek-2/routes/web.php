<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelatihController;
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

Route::get('/pelatih', [PelatihController::class, 'index']);
Route::post('/add', [PelatihController::class, 'store']);

Route::get('/addpelatih', function () {
    
    return view('/admin/admin/addpelatih');
});

Route::get('/murid', function () {
    return view('/admin/admin/murid');
});

Route::get("/admin/admin", [PelatihController::class, "index"] );