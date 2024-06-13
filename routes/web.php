<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/v1/customers',[CustomerController::class,'customers'])->name('customers.customer');

Route::get('/api/v1/new-customer',[CustomerController::class,'saveCustomer'])->name('customers.new-customer');

Route::post('/api/v1/add-customer',[CustomerController::class,'addCustomer'])->name('customers.add-customer');

Route::get('/api/v1/customers/{customer}/modify-customer',[CustomerController::class,'modifyCustomer'])->name('customers.modify-customer');

Route::get('/api/v1/customers/{customer}/update-customer',[CustomerController::class,'udpateCustomer'])->name('customers.update-customer');

Route::get('/api/v1/customers/{customer}/delete-customer',[CustomerController::class,'deleteCustomer'])->name('customers.delete-customer');