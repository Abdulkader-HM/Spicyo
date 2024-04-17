<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CallBackController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::get('/', function () {
    return view('food.index');
})->name('main');

Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');

Route::controller(PagesController::class)->group(function () {
    Route::get('index', 'index')->name('index');
    Route::get('about', 'about')->name('about');
    Route::get('blog', 'blog')->name('blog');
    Route::get('recipe', 'recipe')->name('recipe');
    Route::get('contact', 'contact')->name('contact');
    Route::post('store', 'store')->name('food.store');
    Route::get('control', 'control')->name('control')->middleware('auth');
    Route::get('destroy/{id}', 'destroy')->name('delete');
    Route::get('create', 'createMeal')->name('create.meal');
    Route::get('edit/{id}', 'editMeal')->name('food.edit');
    Route::post('update/{id}', 'updateMeal')->name('food.update');
    Route::get('my/orders', 'orderPage')->name('show/orders');
});

Route::controller(ProfileController::class)->group(function () {
    Route::get('user/profile', 'profile')->name('profile');
    Route::get('user/edit/{id}', 'edit')->name('edit');
    Route::post('user/update{id}', 'store')->name('store');
    Route::get('test', 'test')->name('test');
    Route::get('user/create/profile', 'createProfile')->name('create');
    Route::post('user/save/profile/{id}', 'saveProfile')->name('save');
});

Route::post('user/newsletter', [NewsController::class, 'newsLetter'])->name('newsletter');

Route::controller(CallBackController::class)->group(function () {
    Route::post('user/message', 'saveMail')->name('message');
});

Route::controller(OrderController::class)->group(function () {
    Route::get('user/order/page/{id}', 'orderPage')->name('order/page');
    Route::post('user/order/{id}', 'order')->name('order')->middleware('auth');
    Route::post('user/add/to/basket/{id}', 'basket')->name('basket')->middleware('auth');
    Route::get('show/my/orders', 'myOrders')->name('my/orders');
});

Route::get('search', [SearchController::class, 'search'])->name('search');
