<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::group(['middleware'=>['auth'], 'namespace' => 'Admin', 'prefix' =>'admin'], function(){
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('balance', 'BalanceController@index')->name('admin.balance');
    Route::get('balance/deposit', 'BalanceController@deposit')->name('balance.deposit');
    Route::post('balance', 'BalanceController@depositStore')->name('deposit.store');
#    Route::get('admin', 'AdminController@index')->name('admin.home');
});
    Route::get('/', 'Site\SiteController@index')->name('home');

Auth::routes();

#Route::get('/home', function() {
#    return view('home');
#})->name('home')->middleware('auth');
