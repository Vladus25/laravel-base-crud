<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'OspitiController@home') -> name('home');
Route::get('/ospite/{id}', 'OspitiController@ospite') -> name('ospite');
Route::get('/create/ospite', 'OspitiController@create') -> name('create');
Route::post('/newOspite', 'OspitiController@newOspite') -> name('newOspite');
