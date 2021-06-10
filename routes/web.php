<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;


// Route::middleware(['auth:sanctum'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/', [ HomeController::class, 'home' ]);
Route::get('/tweet', [ HomeController::class, 'index' ])->middleware('auth')->name('index');

