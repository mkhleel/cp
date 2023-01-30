<?php

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin', function () {
        return view('home');
    })->name('dashboard');
});
