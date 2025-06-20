<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'welcome')->name('home');
Route::view('dashboard', 'dashboard')
    ->name('dashboard');
Route::view('favorite', 'favorite_doctors')
    ->name('favorite');
Route::view('doctors', 'doctors')
    ->name('doctors');
Route::view('profile/create', 'create_profile')
    ->name('profile.create');
Route::view('doctors/detail', 'doctor_detail')
    ->name('doctors.detail');
Route::view('article', 'article')
    ->name('article');
Route::view('article/all', 'article_all')
    ->name('article.all');
Route::view('article/bookmark', 'article_bookmark')
    ->name('article.bookmark');
Route::view('article/detail', 'article_detail')
    ->name('article.detail');
Route::view('profile', 'profile')
    ->name('profile');
Route::view('profile/edit', 'profile_edit')
    ->name('profile.edit');
Route::view('profile/language', 'profile_language')
    ->name('profile.language');


Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');

    Route::view('lets', 'livewire/auth/lets')
        ->name('lets');
    Route::view('register2', 'livewire/auth/register2')
        ->name('register2');
    Route::view('register3', 'livewire/auth/register3')
        ->name('register3');
    Route::view('register4', 'livewire/auth/register4')
        ->name('register4');

    Route::view('password/reset2', 'livewire/auth/passwords/reset2')
        ->name('password.request2');
    Route::view('password/reset3', 'livewire/auth/passwords/reset3')
        ->name('password.request3');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');

    /*Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');*/
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');
});
