<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

Route::get('/', function () {
    return view('auth/login');
});
Route::middleware(['auth:sanctum'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/tweet', [ HomeController::class, 'index' ])->middleware(['auth:sanctum'])->name('index');

