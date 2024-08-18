<?php

use Illuminate\Support\Facades\Route;
use Sxp\Contact\Http\Controllers\ContactController;


Route::get('contact', [ContactController::class, 'view'])->name('contact.view');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
