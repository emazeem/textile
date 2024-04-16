<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;




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
});