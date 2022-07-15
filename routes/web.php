<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('food.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(PagesController::class)->group(function () {
    Route::get('food/index', 'index')->name('index');
    Route::get('food/about', 'about')->name('about');
    Route::get('food/blog', 'blog')->name('blog');
    Route::get('food/recipe', 'recipe')->name('recipe');
    Route::get('food/contact', 'contact')->name('contact');
    Route::post('food/store', 'store')->name('food.store');
    Route::get('food/control', 'control')->name('control')->middleware('auth');
    Route::get('food/destroy/{id}', 'destroy')->name('delete');
    Route::get('food/create','createMeal')->name('create.meal');
});

Route::controller(ProfileController::class)->group(function () {
    Route::get('user/profile', 'profile')->name('profile');
    Route::get('user/edit/{id}', 'edit')->name('edit');
    Route::post('user/update{id}', 'store')->name('store');
    Route::get('test', 'test')->name('test');
    Route::get('user/create/profile', 'createProfile')->name('create');
    Route::post('user/save/profile/{id}', 'saveProfile')->name('save');
});
