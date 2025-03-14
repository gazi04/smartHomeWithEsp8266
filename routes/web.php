<?php

use App\Http\Controllers\LoginController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'showLoginPage'])->name('login');
Route::post('/authenticate', [LoginController::class, 'login'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', function() {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

Route::get('/dummy-data', function(){
    User::create([
        'name' => 'gazi',
        'email' => 'gazi@gmail.com',
        'password' => 'gazi'
    ]);
});
