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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('category','CategoryController');
/*
 * Routes for social authentication
 */
Route::get('/login/github','Auth\LoginController@githubLogin')->name('github.login');
Route::get('/login/github/callback','Auth\LoginController@handleGithubCallback')->name('github.callback');
