<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProfileController;
use App\Models\Berita;
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
    $berita = Berita::all();
    return view('welcome', compact('berita'));
});

Route::get('/frontend/berita',[HomeController::class,'berita'])->name('berita');
Route::get('/frontend/berita/{id}',[HomeController::class,'Hberita'])->name('Hberita');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('berita', BeritaController::class);
    Route::resource('kategori', KategoriController::class);
});

require __DIR__.'/auth.php';
