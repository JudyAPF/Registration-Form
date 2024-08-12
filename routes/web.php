<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registration_create',[RegistrationController::class,'registrationForm'])->name('registration.create');
Route::post('create', [RegistrationController::class, 'register']);

Route::get('/persons_info',[RegistrationController::class,'personsInfo'])->name('persons.info');
