<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TestController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\UserController;



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::group(['middleware' => ['auth']], function () {

    Route::group(['prefix' => 'users'], function () {
        Route::get('', [UserController::class, 'index'])->name('users.index');
        Route::post('update', [UserController::class, 'update'])->name('users.update');
        Route::get('create', [UserController::class, 'create'])->name('users.create');
        Route::post('store', [UserController::class, 'store'])->name('users.store');
        Route::get('edit/{id}', [UserController::class, 'edit'])->name('users.edit');
        Route::get('show/{id}', [UserController::class, 'show'])->name('users.show');
        Route::post('delete/{id}', [UserController::class, 'delete'])->name('users.delete');

    });
    Route::group(['prefix' => 'customers'], function () {
        Route::get('', [CustomerController::class, 'index'])->name('customers.index');
        Route::post('update', [CustomerController::class, 'update'])->name('customers.update');
        Route::get('create', [CustomerController::class, 'create'])->name('customers.create');
        Route::get('edit/{id}', [CustomerController::class, 'edit'])->name('customers.edit');
        Route::get('show/{id}', [CustomerController::class, 'show'])->name('customers.show');
        Route::post('delete/{id}', [CustomerController::class, 'delete'])->name('customers.delete');
        Route::post('contact', [CustomerController::class, 'contact'])->name('customers.contact');

    });
    Route::group(['prefix' => 'contacts'], function () {
        Route::get('edit/{id}', [ContactController::class, 'edit'])->name('contacts.edit');
        Route::post('delete/{id}', [ContactController::class, 'delete'])->name('contacts.delete');

    });


    Route::group(['prefix' => 'test'], function () {
        Route::get('', [TestController::class, 'index'])->name('test.index');
        Route::get('edit', [TestController::class, 'edit'])->name('test.edit');
        Route::get('create', [TestController::class, 'create'])->name('test.create');
        Route::get('show/{id}', [TestController::class, 'show'])->name('test.show');
        Route::post('delete/{id}', [TestController::class, 'delete'])->name('test.delete');

    });
});