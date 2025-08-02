<?php

use App\Http\Controllers\EmployeController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
})->name('home');




Route::get('/login', function () {
    return view('Auth.login');
});

Route::resource('employe', EmployeController::class);
