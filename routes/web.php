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

Route::get('/', 'PortfolioController@home')->name('show.home');
Route::get('/AmirYahyaAlagarResume', 'PortfolioController@resume')->name('show.resume');
Route::get('/contact-me', 'PortfolioController@contact')->name('show.contact');
