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

// Route::get('/', function () {
//     return view('welcome');
// });

// STATIC PAGE
Route::get('/', 'StaticPageController@index')->name('home');
Route::get('/privacy', 'StaticPage@privacy')->name('static_page.privacy');
Route::get('/faq', 'StaticPage@faq')->name('static_page.faq');

// STUDENTI
Route::get('/students', 'StudentController@index')->name('student.index');
Route::get('/students/show/{id}', 'StudentController@show')->name('student.show');

