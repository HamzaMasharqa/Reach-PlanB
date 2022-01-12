<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontEndController;

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

Route::get('/reacharabic', [FrontEndController::class, 'getAllPosts'])->name(
    'news.getAllPosts'
);

Route::get('/reachenglish', function () {
    return view('ReachWebsite');
});
Route::get('/reachabout', function () {
    return view('reachabout');
});

Route::get('/editnews', function () {
    return view('editnews');
});

Route::get('/reachein', function () {
    return view('reachein');
});
Route::get('/addpost', function () {
    return view('addnews');
});

Route::get('/login', function () {
    return view('reachLogin');
});
// Route::get('/News', function () {
//     return view('News');
// });
Route::get('/News', [BackendController::class, 'getAllPosts'])->name(
    'news.getAllPosts'
);
Route::get('delete/{id}', [BackendController::class, 'deletePost'])->name(
    'news.deletePost'
);
Route::get('editnews/{id}', [BackendController::class, 'editpost'])->name(
    'news.editpost'
);
// Route::get('/reachein', [pagesController::class, 'getPost'])->name(
//     'crudpost.getPost'
// );
Route::post('/login', [BackendController::class, 'getPost']);
Route::post('/addpost', [BackendController::class, 'addpost']);
Route::post('/addnews', [BackendController::class, 'addNews']);
Route::get('/Resources', function () {
    return view('Resources');
});
Route::get('/Resources', [BackendController::class, 'getAllPosts'])->name(
    'news.getAllPosts'
);
Route::post('/addpost', [ResourcesController::class, 'addpost']);
Route::post('/addnews', [ResourcesController::class, 'addNews']);
