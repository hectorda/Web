<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::get('/', function () {
	    return view('welcome');
	});

    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::resource('users','UserController');
    Route::get('users/{id}/destroy',[
    	'as'=>'users.delete',
    	'uses'=>'UserController@destroy'
    ]);

    Route::get('emails/index',[
    	'as' => 'emails.index',
    	'uses' => 'EmailController@index']);
	

});
