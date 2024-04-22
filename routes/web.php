<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TestController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RangeController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\DesignationController;
use App\Http\Controllers\Admin\WorkOrderController;
use App\Http\Controllers\Admin\PermissionController;



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::group(['middleware' => ['auth']], function () {

    Route::group(['prefix' => 'users'], function () {
        Route::get('', [UserController::class, 'index'])->name('users.index');
        Route::post('update', [UserController::class, 'update'])->name('users.update');
        Route::post('store', [UserController::class, 'store'])->name('users.store');
        Route::get('create', [UserController::class, 'create'])->name('users.create');
        Route::get('edit/{id}', [UserController::class, 'edit'])->name('users.edit');
        Route::get('show/{id}', [UserController::class, 'show'])->name('users.show');
        Route::get('delete/{id}', [UserController::class, 'delete'])->name('users.delete');

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


    Route::group(['prefix' => 'tests'], function () {
        Route::get('', [TestController::class, 'index'])->name('tests.index');
        Route::get('edit', [TestController::class, 'edit'])->name('tests.edit');
        Route::get('create', [TestController::class, 'create'])->name('tests.create');
        Route::get('show/{id}', [TestController::class, 'show'])->name('tests.show');
        Route::post('delete/{id}', [TestController::class, 'delete'])->name('tests.delete');

    });
    Route::group(['prefix' => 'ranges'], function () {
        Route::get('', [RangeController::class, 'index'])->name('ranges.index');
        Route::get('edit', [RangeController::class, 'edit'])->name('ranges.edit');
        Route::get('create', [RangeController::class, 'create'])->name('ranges.create');
        Route::get('show/{id}', [RangeController::class, 'show'])->name('ranges.show');
        Route::post('delete/{id}', [RangeController::class, 'delete'])->name('ranges.delete');

    });
    Route::group(['prefix' => 'departments'], function () {
        Route::get('', [DepartmentController::class, 'index'])->name('departments.index');
        Route::get('edit', [DepartmentController::class, 'edit'])->name('departments.edit');
        Route::get('create', [DepartmentController::class, 'create'])->name('departments.create');
        Route::get('show/{id}', [DepartmentController::class, 'show'])->name('departments.show');
    });
    Route::group(['prefix' => 'designations'], function () {
        Route::get('', [DesignationController::class, 'index'])->name('designations.index');
        Route::get('edit', [DesignationController::class, 'edit'])->name('designations.edit');
        Route::get('create', [DesignationController::class, 'create'])->name('designations.create');
        Route::get('show/{id}', [DesignationController::class, 'show'])->name('designations.show');
    });
    Route::group(['prefix' => 'work-orders'], function () {
        Route::get('', [WorkOrderController::class, 'index'])->name('work-orders.index');
        Route::get('create', [WorkOrderController::class, 'create'])->name('work-orders.create');
        Route::get('edit', [WorkOrderController::class, 'edit'])->name('work-orders.edit');
        
    });
    Route::group(['prefix' => 'permissions'], function () {
        Route::get('', [PermissionController::class, 'index'])->name('permissions.index');
        Route::get('create', [PermissionController::class, 'create'])->name('permissions.create');
        Route::get('edit', [PermissionController::class, 'edit'])->name('permissions.edit');
        Route::get('show/{id]', [PermissionController::class, 'show'])->name('permissions.show');
        
    });
});