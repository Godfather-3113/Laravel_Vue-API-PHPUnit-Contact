<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/{slug}', 'AppController@index')->where('slug', '.*');
