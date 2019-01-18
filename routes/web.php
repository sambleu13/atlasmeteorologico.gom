<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//homepage route

Route::get('/', 'PagesController@index');
Route::get('home','PagesController@index');
Route::get('informacion','PagesController@info');
Route::get('acerca','PagesController@acerca');
Route::get('products','PagesController@productos');
Route::get('products/temp','PagesController@temperaturas');
Route::get('products/viento','PagesController@viento');
Route::get('products/precipitacion','PagesController@precipitacion');
Route::get('products/humedad','PagesController@humedad');
Route::get('products/evaporacion','PagesController@evaporacion');
Route::get('products/capa_limite','PagesController@capa_limite');
Route::get('products/radiacion_larga','PagesController@radiacion_larga');
Route::get('products/radiacion_corta','PagesController@radiacion_corta');
Route::get('products/viento/rosas_viento','PagesController@rosas_viento');
Route::get('derrames','PagesController@derrames');
Route::get('animaciones/{codigo}','PagesController@animaciones');
Route::post('animaciones/{codigo}','PagesController@anim_mens');
Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);
Route::get('manual','PagesController@manual');


//test route
Route::get('test','TestController@index');
