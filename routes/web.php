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
    return view('welcome');
});


#================ D I S C U S S  =================
Route::get('/discuss',function (){
    return view('discuss');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


/*
|--------------------------------------------------------------------------
| Admin Control
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => 'auth'], function (){

    #================ C H A N N EL S  =================
    Route::resource('channels', 'ChannelsController');


    #======  discussions create  ==============
    Route::get('discussion/create', [
        'uses' => 'DiscussionsController@create',
        'as' => 'discussions.create'
    ]);

    #======= discussions store  ===============
    Route::post('discussion/store', [
        'uses' => 'DiscussionsController@store',
        'as' => 'discussions.store'
    ]);

    #======= discussions/slug  ===============
    Route::get('discussion/{slug}', [
        'uses' => 'DiscussionsController@show',
        'as' => 'discussion'
    ]);

});
