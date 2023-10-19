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

Route::middleware('auth')->group(function(){
    Route::get('/', \App\Livewire\Home::class)->name('home');
    Route::get('/about', \App\Livewire\About::class)->name('about');

    Route::get('/user', \App\Livewire\Users\Index::class)->name('user.index');
    Route::get('/user/{user}', \App\Livewire\Users\Show::class)->name('user.show');

    Route::get('/posts', \App\Livewire\Posts\Index::class)->name('posts.index');
    Route::get('/posts/create', \App\Livewire\Posts\Create::class)->name('posts.create');

    Route::post('/logout', \App\Http\Controllers\LogoutController::class)->name('logout');

});

Route::get('/login', \App\Livewire\Auth\Login::class)->name('login')->middleware('guest');
