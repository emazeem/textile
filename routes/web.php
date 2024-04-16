<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.customers.create');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'customers'], function () {
    Route::get('', [CustomerController::class, 'index'])->name('customers.index');
    Route::post('update', [CustomerController::class, 'update'])->name('customers.update');
    Route::get('show/{id}', [CustomerController::class, 'show'])->name('customers.show');
    Route::post('delete/{id}', [CustomerController::class, 'delete'])->name('customers.delete');


});