<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StudentController;
use App\Livewire\Attenders;
use App\Livewire\Management;
use App\Livewire\StudentShow;
use App\Livewire\RecordShow;
use App\Http\Controllers\EditController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/student', StudentShow::class)->middleware('auth');
Route::get('management', Management::class)->middleware('auth');
Route::get('record', RecordShow::class)->middleware('auth');
Route::get('student/{id}/edit', [App\Http\Controllers\EditController::class, 'edit'])->middleware('auth');
Route::put('student/{id}/edit', [App\Http\Controllers\EditController::class, 'update'])->middleware('auth');

