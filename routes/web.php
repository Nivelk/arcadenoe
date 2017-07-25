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
    return view('index');
});

Route::get('/contato',['as' => 'contato', function(){
    return view('contato');
}]);

Route::post('/contato', ['as' => 'contato.send', function(){
    return Request::all();
}]);

Route::get('/#page-top',['as' => 'home', function(){
     return view('index');
}]);

Route::get('/#sobre',['as' => 'sobre', function(){
     return view('index');
}]);

Route::get('/#servicos',['as' => 'servicos', function(){
     return view('index');
}]);

Route::get('/#galeria',['as' => 'galeria', function(){
     return view('index');
}]);

Route::get('/#contato', ['as' => 'contato', function(){
     return view('index');
}]);

