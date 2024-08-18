<?php

use Illuminate\Support\Facades\Route;
use Sxp\Contact\Http\Controllers\ContactController;
Route::middleware(['web'])->group(function() {

    Route::get('contact', [ContactController::class, 'view'])->name('contact.view');
    Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
});

