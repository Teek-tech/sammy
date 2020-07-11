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
})->name('welcome');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('services', function () {
    return view('services');
})->name('services');

Route::get('contact', function () {
    return view('contact');
})->name('contact');


Route::get('testimonials', function(){
    return view('testimonial');
})->name('testimonials');

Route::post('testimonials', 'ContactController@testimonials')->name('goodwill');



Route::post('contact', 'ContactController@index')->name('contact_sammy');
Route::post('life-coach', 'ContactController@LifeCoaching')->name('life.coaching');
Route::post('corporate-coach', 'ContactController@CorporateCoaching')->name('corporate.coaching');
Route::post('book', 'ContactController@booking')->name('book.sammy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
