<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InquiryController;

Route::get('/', [InquiryController::class, 'index'])->name('inquiries.index');
Route::get('/inquiries/create', [InquiryController::class, 'create'])->name('inquiries.create');
Route::post('/inquiries', [InquiryController::class, 'store'])->name('inquiries.store');
