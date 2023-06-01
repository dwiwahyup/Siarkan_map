<?php

use App\Http\Controllers\ArusLantasController;
use App\Http\Controllers\DaerahRawanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FuzzyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JalanController;
use App\Http\Controllers\KecelakaanController;
use App\Http\Controllers\PemetaaanUserController;
use App\Http\Controllers\RulesController;
use App\Models\ArusLantas;
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

Auth::routes();

Route::get('/', function () {
    return view('users.home');
});

Route::get('/author', function () {
    return view('users.author');
});

Route::get('/datakecelakaan', function () {
    return view('users.data_kecelakaan');
});


Route::post('/fuzzy', [FuzzyController::class, 'fuzzy'])->name('fuzzy');
Route::get('/pemetaan', [PemetaaanUserController::class, 'index'])->name('pemetaan');

//detail
Route::get('/detail/{id}', [PemetaaanUserController::class, 'detail'])->name('detail');

Route::middleware(['auth', 'verified'])
    ->prefix('dashboard')
    ->group(function () {
        Route::middleware(['Admin'])->group(function () {
            route::get('/', [DashboardController::class, 'index']);
            Route::resource('jalan', JalanController::class);
            Route::resource('kecelakaan', KecelakaanController::class);
            Route::resource('jalan.aruslantas', ArusLantasController::class);
            //rules
            Route::resource('rules', RulesController::class);
            Route::resource('daerahrawan', DaerahRawanController::class);
            Route::get('/details', [DaerahRawanController::class, 'detail'])->name('daerahrawan.detail');
        });
    });

route::get('/home', [HomeController::class, 'index']);
