<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/login', function() {
    return view('auth.login');
});
Route::get('/debug', function () {
    return view('debug');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/profile', function() {
    return view('profile');
});
Route::get('/memberDashboard', function () {
    return view('memberDashboard');
});
Route::get('/statistics', function () {
    return view('role-member/statistics');
});
Route::get('/hangman', function () {
    return view('games.hangman');
});

Route::get('/hangmanEdit', function () {
    return view('role-admin/hangmanEdit');
});

Route::get('/addWord', function () {
    return view('role-admin/addWord');
});
Route::get('/upload', function () {
    return view('role-admin/upload');
});

Route::post('/upload', 'App\Http\Controllers\HomeController@upload')->name('upload');

Route::post('/login', 'App\Http\Controllers\Auth\LoginController@authenticate');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');

Route::post('/editUser', 'App\Http\Controllers\ProfileController@editUser');
Route::post('/suspend', 'App\Http\Controllers\ProfileController@suspend');
Route::post('/activate', 'App\Http\Controllers\ProfileController@activate');
Route::post('/delete', 'App\Http\Controllers\ProfileController@delete');
Route::post('/memberUpdate', 'App\Http\Controllers\ProfileController@memberUpdate');
Route::post('/adminUpdate', 'App\Http\Controllers\ProfileController@adminUpdate');

Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/editUser', 'App\Http\Controllers\ProfileController@editUser');
Route::post('/suspend', 'App\Http\Controllers\ProfileController@suspend');
Route::post('/activate', 'App\Http\Controllers\ProfileController@activate');
Route::post('/delete', 'App\Http\Controllers\ProfileController@delete');
Route::post('/memberUpdate', 'App\Http\Controllers\ProfileController@memberUpdate');
Route::post('/adminUpdate', 'App\Http\Controllers\ProfileController@adminUpdate');

Route::post('/addWord', 'App\Http\Controllers\HangmanController@addWord');
Route::post('/deleteWord', 'App\Http\Controllers\HangmanController@deleteWord');

Route::get('/tictactoe', 'App\Http\Controllers\TTTController@startFirst');
Route::post('/takeTurn', 'App\Http\Controllers\TTTController@takeTurn');
Route::post('/startFirst', 'App\Http\Controllers\TTTController@startFirst');
Route::get('/startFirst', 'App\Http\Controllers\TTTController@startFirst');
Route::get('/startSecond', 'App\Http\Controllers\TTTController@startSecond');
Route::post('/startSecond', 'App\Http\Controllers\TTTController@startSecond');

Route::get('/resetStatistics', 'App\Http\Controllers\StatisticsController@resetStatistics');

Route::get('/hangman', 'App\Http\Controllers\HangmanController@start');
Route::post('/chooseLetter', 'App\Http\Controllers\HangmanController@chooseLetter');
Route::post('/toHangman', 'App\Http\Controllers\HangmanController@toHangman');
Route::get('/hangmanEdit', 'App\Http\Controllers\HangmanController@addWord');
Route::post('/deleteWord', 'App\Http\Controllers\HangmanController@deleteWord');

