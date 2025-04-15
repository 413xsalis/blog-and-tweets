<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\GuestController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/entries/create', [App\Http\Controllers\EntryController::class, 'create']);

Route::post('/entries/create', [App\Http\Controllers\EntryController::class, 'store']);

Route::get('/entries/{entryBySlug}', [App\Http\Controllers\GuestController::class, 'show']);

Route::get('/entries/{entry}/edit', [App\Http\Controllers\EntryController::class, 'edit']);

Route::put('/entries/{entry}', [App\Http\Controllers\EntryController::class, 'update']);

Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show']);
