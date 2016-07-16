<?php

Route::get('/', ['as' => 'home', 'uses' => 'ClientsController@index']);
Route::get('/clients/create', ['as' => 'clients.create', 'uses' => 'ClientsController@create']);
Route::post('/', ['as' => 'clients.store', 'uses' => 'ClientsController@store']);
Route::get('/clients/{client}', ['as' => 'clients.show', 'uses' => 'ClientsController@show']);