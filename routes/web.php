<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});

Route::get('/daftar-mitra', function () {
    return view('daftar-mitra');
})->name('daftar-mitra');

Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');
