<?php

use App\Http\Controllers\Auth\GoogleAuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Ppdb\PpdbController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::controller(RegisterController::class)->group(function () {
    Route::post('/register', 'register')->name('register.post');
    Route::get('/register-success', 'handleSuccess')->name('register.success');
    Route::get('/register/verify-email/{id}', 'verifyEmail')->name('register.verify.email');
});

Route::controller(PpdbController::class)->group(function () {
    Route::get('/ppdb', 'index')->name('ppdb.index');
});
