<?php

Route::get('/dashboard', function () {
    $data = [
        'totalUsers' => 100,
        'newMessages' => 5
    ];
    return view('dashboard', $data);
})->name('dashboard');