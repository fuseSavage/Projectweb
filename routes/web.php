<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@home');

Route::get('/asdmin','AsdminController@index');

Route::post('/addimage','AsdminController@store')->name('addimage');

// Route::get('/create', 'UploadController@show');

Route::get('/create/newManga', 'MangaController@create');

Route::post('/store/magna', 'MangaController@store');

Route::post('/addupload','UploadController@store')->name('addupload');

// Read manga

Route::get('/onepiece/onepiecezz', 'ReadController@onepiecezz');

Route::get('/soma/somazz', 'ReadController@somazz');

Route::get('/dragonball/dragonballzz', 'ReadController@dragonballzz');

// Ep manga

Route::get('/onepiece.p/onepiece_ep_1', 'ReadController@onepiece_ep_1');

Route::get('/onepiece.p/onepiece_ep_2', 'ReadController@onepiece_ep_2');

Route::get('/onepiece.p/onepiece_ep_3', 'ReadController@onepiece_ep_3');

Route::get('/onepiece.p/onepiece_ep_4', 'ReadController@onepiece_ep_4');

Route::get('/onepiece.p/onepiece_ep_5', 'ReadController@onepiece_ep_5');

Route::get('/soma.p/soma_ep_1', 'ReadController@soma_ep_1');

Route::get('/soma.p/soma_ep_2', 'ReadController@soma_ep_2');

Route::get('/soma.p/soma_ep_3', 'ReadController@soma_ep_3');

Route::get('/soma.p/soma_ep_4', 'ReadController@soma_ep_4');

Route::get('/soma.p/soma_ep_5', 'ReadController@soma_ep_5');

Route::get('/dragonball.p/dragonball_ep_1', 'ReadController@dragonball_ep_1');

Route::get('/dragonball.p/dragonball_ep_2', 'ReadController@dragonball_ep_2');

Route::get('/dragonball.p/dragonball_ep_3', 'ReadController@dragonball_ep_3');

Route::get('/dragonball.p/dragonball_ep_4', 'ReadController@dragonball_ep_4');

Route::get('/dragonball.p/dragonball_ep_5', 'ReadController@dragonball_ep_5');