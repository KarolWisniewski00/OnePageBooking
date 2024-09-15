<?php

use App\Http\Controllers\FacebookProxyController;
use App\Http\Controllers\FlatController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ScraperController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/rules', [IndexController::class, 'rules'])->name('rules');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [FlatController::class, 'index'])->name('dashboard');
        Route::get('create', [FlatController::class, 'create'])->name('flat.create');
        Route::post('store', [FlatController::class, 'store'])->name('flat.store');
        Route::get('edit/{flat}', [FlatController::class, 'edit'])->name('flat.edit');
        Route::put('update/{flat}', [FlatController::class, 'update'])->name('flat.update');
        Route::delete('delete/{flat}', [FlatController::class, 'delete'])->name('flat.delete');
    });
    Route::prefix('setting')->group(function () {
        Route::get('edit/{setting}', [SettingController::class, 'edit'])->name('setting.edit');
        Route::put('update/{setting}', [SettingController::class, 'update'])->name('setting.update');
    });

});
