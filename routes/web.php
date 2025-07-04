<?php

use App\Livewire\UsersTable;
use Illuminate\Support\Facades\Route;

Route::get('/users', UsersTable::class)->middleware(['auth']);

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');



require __DIR__.'/auth.php';
