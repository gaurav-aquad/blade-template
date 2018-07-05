<?php

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

Route::get('/', function () {
    return view('home', ['page' => 'home']);
});

Route::get('/pages/typography', function () {
    return view('pages.typography', ['page' => 'typography']);
});

Route::get('/pages/helper-classes', function () {
    return view('pages.helper-classes', ['page' => 'helper-classes']);
});

Route::get('/pages/widgets/cards/basic', function () {
    return view('pages.widgets.cards.basic', ['widgets' => 'basic']);
});

Route::get('/pages/widgets/cards/colored', function () {
    return view('pages.widgets.cards.colored', ['widgets' => 'colored']);
});

Route::get('/pages/widgets/cards/no-header', function () {
    return view('pages.widgets.cards.no-header', ['widgets' => 'no-header']);
});