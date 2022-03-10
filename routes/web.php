<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('comics','ComicController');   //con Route::resource con il primo parametro setto la rotta della uri, lo vediamo attraverso php artisan route:list,vediamo che andrà a pescare il metodo index o store ecc..., il secondo parametro sarà il controller da dove verranno pescati i record
