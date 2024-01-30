<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', \App\Livewire\Pages\HomeComponent::class)->name('home');
Route::get('/about-us', \App\Livewire\Pages\AboutComponent::class)->name('about-us');
Route::get('/contact-us', \App\Livewire\Pages\ContactComponent::class)->name('contact-us');
