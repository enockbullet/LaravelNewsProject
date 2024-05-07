<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);
Route::get('about-us', [MainController::class, 'about_us']);

Route::get('contant-us/{id}', function ($id) {
    return 'This is the contact-us page =>      ' . $id;
})->name('call');
