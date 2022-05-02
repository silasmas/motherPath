<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// routes/web.php

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', function () {
        return view('pages.home');
    })->name('home');
    Route::get('about', function () {
        return view('pages.about');
    })->name('about');
    Route::get('service', function () {
        return view('pages.services');
    })->name('service');
    Route::get('feedback', function () {
        return view('pages.temoignage');
    })->name('feedback');
    Route::get('galerie', function () {
        return view('pages.galerie');
    })->name('galerie');
});

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/
