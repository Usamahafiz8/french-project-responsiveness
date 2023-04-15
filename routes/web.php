<?php

use Illuminate\Support\Facades\Route;
use APP\Http\Controllers\HomeController;
use App\Http\Controllers\AuditorController;
use App\Http\Controllers\CustomerController;



Route::get('/', function () {
    return view('welcome');
    
});

Auth::routes();

Route::get('/form', [App\Http\Controllers\HomeController::class, 'form']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('is_auditor');
Route::get('/customerdetails/{id}', [App\Http\Controllers\CustomerController::class, 'customerdetails'])->name('customers');
Route::post('/addCustomer', [App\Http\Controllers\CustomerController::class, 'add_customer'])->name('addCustomer')->middleware('is_auditor');

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('admin/manageAuditor', [App\Http\Controllers\HomeController::class, 'manageAuditorsByAdmin'])->name('admin.manageAuditor')->middleware('is_admin');
Route::get('admin/manageCustomer', [App\Http\Controllers\HomeController::class, 'manageCustomersByAdmin'])->name('admin.manageCustomer')->middleware('is_admin');
Route::post('admin/addauditor', [App\Http\Controllers\AuditorController::class, 'add_auditor'])->middleware('is_admin');
Auth::routes();


Route::post('/save_step1', [App\Http\Controllers\CustomerController::class, 'step1Store']);
Route::post('/save_step2', [App\Http\Controllers\CustomerController::class, 'step2Store']);