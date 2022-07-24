<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CallBackController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;


Route::get('admin/test', function () {
    return 'welcome admin';
});


Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');

Route::group(['middleware' => 'auth', 'middleware' => 'is_admin', 'prefix' => 'admin'], function () {
    // Route::get('index', [AdminController::class, 'index'])->name('admin/index');
    Route::controller(AdminController::class)->group(function () {
        Route::get('layout', 'app')->name('admin/layout');
        Route::get('index', 'index')->name('admin/index');
        Route::get('tables', 'tables')->name('admin/tables');
        Route::get('chart', 'chart')->name('admin/chart');
        Route::post('task', 'addTask')->name('admin/task');
    });
});