<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard-general-dashboard', ['type_menu' => 'dashboard']);
});
