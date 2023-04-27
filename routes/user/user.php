<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Livewire\DynamicInput;

use Illuminate\Support\Facades\Route;

Route::resource('students',StudentController::class);
Route::resource('teachers',TeacherController::class)->middleware('auth');



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dynamic-input', DynamicInput::class)->name('dynamic-input');

