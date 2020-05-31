<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::group(['middleware'=>['auth'], 'namespace' => 'Admin'], function(){
    Route::get('admin', 'AdminController@index')->name('admin.home');
});
    Route::get('/', 'Site\SiteController@index')->name('home');

Auth::routes();

#Route::get('/home', function() {
#    return view('home');
#})->name('home')->middleware('auth');
