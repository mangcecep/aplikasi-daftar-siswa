<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/add-to-do-list', [HomeController::class, 'add']);
Route::post('/add-to-do-list', [HomeController::class, 'store'])->name('add');
Route::delete('/delete-to-do-list/{id}', [HomeController::class, 'destroy'])->name('delete');
Route::get('/to-do-list-update/{id}', [HomeController::class, 'show'])->name('show.update');
Route::put('/to-do-list-update/{id}', [HomeController::class, 'update'])->name('update');

Route::apiResource('/list-siswa', StudentController::class);

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});
