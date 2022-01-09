<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group whic
h
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/reacharabic', function () {
    return view('ReachWebsiteArabic');
});

Route::get('/reachenglish', function () {
    return view('ReachWebsite');
});
Route::get('/reachabout', function () {
    return view('reachabout');
});

Route::get('/reachadmin', function () {
    return view('reachAdmin');
});

Route::get('/reachein', function () {
    return view('reachein');
});
