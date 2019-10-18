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
//frontend Routing
Route::get('/index','frontendController@homeIndex')->name('home_index');
Route::get('/फोर्ट+ Bagri Nagar + एक + प्राचीन + 300 वर्षीय +ाजपूत +िला','frontendController@parichy')->name('view_parichay');
Route::get('/मैं + बगड़ी  +  नगर + हूं','frontendController@bagriStory')->name('view_story');
Route::get('/मेरा बगड़ी ग्राम हैं','frontendController@narenStory')->name('naren_story');
Route::get('/बगड़ी के ठाकुर','frontendController@history')->name('history');
Route::get('/news','frontendController@newsList')->name('new_list');
Route::get('/hospital','frontendController@hospital')->name('hospital');
Route::get('/education','frontendController@education')->name('education');
Route::get('/places','frontendController@places')->name('places');
Route::get('/contact','frontendController@contact')->name('contact');
Route::get('/photo_gallery','frontendController@photoGallery')->name('photo_gallery');
//end frontend routing

//backend Routing
Route::get('/admin_panel/dashboard','backendController@dashboard')->name('dashboard');
Route::get('/admin_panel/news','backendController@news')->name('dashboard');