<?php

use Illuminate\Http\Request;
use Webeasy\Contact\Http\Controllers\ContactController;

Route::group(['namespace' => 'Webeasy\Contact'], function(){

    Route::get('contact', [ContactController::class, 'index'])->name('contact-form');
    Route::post('contact-action', [ContactController::class, 'send'])->name('contact-action');

});