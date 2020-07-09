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
// Frontend
require (__DIR__ . '/frontend/route_frontend.php');


Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', 'HomeController@index');
    
    Route::resource('banners', 'BannerController');
    
    Route::resource('tours', 'TourController');
    
    Route::resource('imageTours', 'imageTourController', ['except'=>['create']]);
    
    Route::get('/imageTours/create/{id}', 'imageTourController@create')->name('imageTours.create');
    
    // Route::resource('places', 'placesController');
    
    Route::resource('places', 'placesController', ['except'=>['create']]);
    
    Route::get('/places/create/{id}', 'placesController@create')->name('placesCreate');
    
    
    Route::resource('cities', 'cityController');
    
    Route::resource('whySelects', 'whySelectController');
    
    Route::resource('programTours', 'ProgramTourController',['except'=>['create']]);
    
    Route::get('programTours/create/{id}','ProgramTourController@create')->name('programTours.create');
    
    Route::resource('news', 'NewsController');
    
    Route::resource('menus', 'MenuController');
    
    Route::resource('groupTours', 'GroupTourController');
    
    Route::resource('promotions', 'PromotionController');
    
    Route::resource('rewriteWords', 'rewriteWordController');
    
    Route::resource('rewriteWords', 'rewriteWordController');
    
    Route::resource('introduces', 'introduceController');


    Route::resource('faqs', 'faqsController');

    
    Route::resource('commentClients', 'commentClientController',['except'=>['store']]);

    Route::resource('contactsClients', 'contactsClientController');

    Route::resource('tickets', 'ticketController');
});    

Route::post('commentClients','commentClientController@store');

Route::get('/clear-cache', function() {
    Artisan::call('config:cache');
    Artisan::call('config:cache');
    return "Cache is cleared";
});



