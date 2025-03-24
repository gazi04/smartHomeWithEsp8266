<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\EspController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'showLoginPage'])->name('login');
Route::post('/authenticate', [LoginController::class, 'login'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', function() {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

Route::get('/send', function() {
    return view('send-data');
});
Route::post('/sendData', [EspController::class, 'sendData'])->name('send-data-esp');

Route::get('/get', function() {
    return view('welcome');
});

Route::get('/dummy-data', function(){
    User::create([
        'name' => 'gazi',
        'email' => 'gazi@gmail.com',
        'password' => 'gazi'
    ]);
});
