<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

Route::get('/lang/{lang}', function ($lang) {
    session(['applocale' => $lang]);
    return redirect()->back();
});
