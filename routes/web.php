<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\visiMisiController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\katalogController;
use App\Http\Controllers\portofolioController;
use App\Http\Controllers\contactController;
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

Route::get('/', function () {
    return view('home.index');
});

Route::get('/layout', function () {
    return view('layout.template');
    // return asset('admin/HTML/index.html');
});

Route::get('/', [homeController::class, 'index'])->name('home.index');
Route::get('/visi-misi', [visiMisiController::class, 'index'])->name('visi-misi.index');
Route::get('/produk', [produkController::class, 'index'])->name('produk.index');
Route::get('/katalog', [katalogController::class, 'index'])->name('katalog.index');
Route::get('/portofolio', [portofolioController::class, 'index'])->name('portofolio.index');
Route::get('/hubungi-kami', [contactController::class, 'index'])->name('contact.index');
