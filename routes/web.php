<?php
use App\Http\Controllers\DatperController;
use App\Http\Controllers\ConsultaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('datpers', DatperController::class);
Route::resource('consultas', ConsultaController::class);
