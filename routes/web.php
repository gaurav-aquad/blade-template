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
Route::prefix('pages')->group(function () {

  Route::get('typography', 'PagesController@typography');
  Route::get('helper-classes', 'PagesController@helperClasses');

  Route::prefix('widgets')->group(function () {

    Route::prefix('cards')->group(function () {

      Route::get('basic', 'PagesController@cardsBasic');
      Route::get('colored', 'PagesController@cardsColored');
      Route::get('no-header', 'PagesController@cardsNoHeader');
    });
  });
});

Route::get('/', 'PagesController@home');

Route::get('/logout', function() {
  Auth::logout();
  return redirect()->route('login');
});

Auth::routes();
