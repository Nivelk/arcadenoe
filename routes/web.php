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

Route::get('/','RouteController@indexpage');

Route::get('/#page-top',['as' => 'home', 'uses' => 'RouteController@indexpage']);

Route::get('/#sobre',['as' => 'sobre', 'uses' => 'RouteController@indexpage']);

Route::get('/#servicos',['as' => 'servicos', 'uses' => 'RouteController@indexpage']);

Route::get('/#galeria',['as' => 'galeria', 'uses' => 'RouteController@indexpage']);

Route::get('/#contato', ['as' => 'contato', 'uses' => 'RouteController@indexpage']);

Route::get('/resultados', ['as' => 'resultados', 'uses' => 'RouteController@resultados']);

Route::get('/contato',function(){
    return view('contato');
});

Route::post('/contato', ['as' => 'contato.send', function(){
    return Request::all();
}]);
