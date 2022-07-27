<?php

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

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');

Route::controller(PagesController::class)->group(function () {
    Route::get('food/index', 'index')->name('index');
    Route::get('food/about', 'about')->name('about');
    Route::get('food/blog', 'blog')->name('blog');
    Route::get('food/recipe', 'recipe')->name('recipe');
    Route::get('food/contact', 'contact')->name('contact');
    Route::post('food/store', 'store')->name('food.store');
    Route::get('food/control', 'control')->name('control')->middleware('auth');
    Route::get('food/destroy/{id}', 'destroy')->name('delete');
    Route::get('food/create', 'createMeal')->name('create.meal');
    Route::get('food/edit/{id}', 'editMeal')->name('food.edit');
    Route::post('food/update/{id}', 'updateMeal')->name('food.update');
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
    Route::post('user/message', 'saveMail')->name('message')->middleware('auth');
});

Route::controller(OrderController::class)->group(function () {
    Route::get('user/order/page/{id}', 'orderPage')->name('order/page');
    Route::post('user/order/{id}', 'order')->name('order')->middleware('auth');
    Route::post('user/add/to/basket/{id}', 'basket')->name('basket')->middleware('auth');
    Route::get('show/my/orders', 'myOrders')->name('my/orders');
});

Route::get('search', [SearchController::class, 'search'])->name('search');

// Route::controller(PaymentController::class)->group(function () {
//     Route::get('go-payment', 'goPayment')->name('payment.go');
//     Route::get('payment', 'payment')->name('payment');
//     Route::get('cancel', 'cancel')->name('payment.cancel');
//     Route::get('payment/success', 'success')->name('payment.success');
// });

// Route::get('go-payment', [PapPalController::class, 'goPayment'])->name('payment.go');
// Route::get('payment', [PapPalController::class, 'payment'])->name('payment');
// Route::get('cancel', [PapPalController::class, 'cancel'])->name('payment.cancel');
// Route::get('payment/success', [PapPalController::class, 'success'])->name('payment.success');
