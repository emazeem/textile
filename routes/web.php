<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('admin.test.create');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::group(['middleware' => ['auth']], function () {

    Route::group(['prefix' => 'customers'], function () {
        Route::get('', [CustomerController::class, 'index'])->name('customers.index');
        Route::post('update', [CustomerController::class, 'update'])->name('customers.update');
        Route::get('edit/{id}', [CustomerController::class, 'edit'])->name('customers.edit');
        Route::get('show/{id}', [CustomerController::class, 'show'])->name('customers.show');
        Route::post('delete/{id}', [CustomerController::class, 'delete'])->name('customers.delete');
        Route::post('contact', [CustomerController::class, 'contact'])->name('customers.contact');

    });

    Route::group(['prefix' => 'test'], function () {
        Route::get('', [TestController::class, 'index'])->name('test.index');
        Route::get('update', [TestController::class, 'update'])->name('test.update');
        Route::get('show/{id}', [TestController::class, 'show'])->name('test.show');
        Route::post('delete/{id}', [TestController::class, 'delete'])->name('test.delete');

    });
});