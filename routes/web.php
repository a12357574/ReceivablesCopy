<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//DASHBOARD

Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->middleware('admin');

//INVOICES
Route::get('/admin/invoices', [App\Http\Controllers\Admin\InvoiceController::class, 'index']);

Route::get('/admin/invoices/create', [App\Http\Controllers\Admin\InvoiceController::class, 'create']);

Route::post('/admin/invoices', [App\Http\Controllers\Admin\InvoiceController::class, 'store']);

Route::get('/admin/invoices/{InvoiceID}/edit',[App\Http\Controllers\Admin\InvoiceController::class, 'edit']);

Route::put('/admin/invoices/{InvoiceID}', [App\Http\Controllers\Admin\InvoiceController::class, 'update']);

Route::get('/admin/invoices/{InvoiceID}/delete', [App\Http\Controllers\Admin\InvoiceController::class, 'delete']);

//RECEIPTS
Route::get('/admin/receipts', [App\Http\Controllers\Admin\ReceiptController::class, 'index']);

Route::get('/admin/receipts/create', [App\Http\Controllers\Admin\ReceiptController::class, 'create']);

Route::post('/admin/receipts', [App\Http\Controllers\Admin\ReceiptController::class, 'store']);

Route::get('/admin/receipts/{ReceiptID}/edit',[App\Http\Controllers\Admin\ReceiptController::class, 'edit']);

Route::put('/admin/receipts/{ReceiptID}', [App\Http\Controllers\Admin\ReceiptController::class, 'update']);

Route::get('/admin/receipts/{ReceiptID}/delete', [App\Http\Controllers\Admin\ReceiptController::class, 'delete']);
