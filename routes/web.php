<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/memo-admin', function() {
    return view('superadmin.memo.memo'); })->name('memo-admin');