<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::group(['middleware'=>['auth'], 'namespace' => 'Admin', 'prefix' =>'admin'], function(){
    Route::get('/', 'AdminController@index')->name('admin.home');
    
    Route::get('historic', 'BalanceController@historic')->name('balance.historic');
    Route::get('list', 'UserController@list')->name('user.list');
    Route::get('papel', 'UserController@papel')->name('user.papel');
    Route::get('plastico', 'UserController@plastico')->name('user.plastico');
    Route::get('vidro', 'UserController@vidro')->name('user.vidro');
    Route::get('metal', 'UserController@metal')->name('user.metal');
    Route::get('naoreciclavel', 'UserController@naoreciclavel')->name('user.naoreciclavel');
    Route::get('cadastrarTipo', 'UserController@cadastrarTipo')->name('user.cadastrarTipo');

    Route::get('sac', 'BalanceController@sac')->name('balance.sac');
    Route::post('sac', 'BalanceController@sacStore')->name('sac.store');
    
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
