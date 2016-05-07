<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',[
    'uses'  => 'NiceActionController@getHome',
    'as' => 'home'
]);

Route::group(['prefix' => 'do'], function(){
    
   //URL parameters received
    Route::get('/{action}/{name?}',[
        'uses'  => 'NiceActionController@getNiceAction', //Uses the NiceActionController to get the actions available
        'as' => 'niceaction'
    ]);
    
    Route::post('/add_action',[
        'uses'  => 'NiceActionController@postInsertNiceAction', //Uses the NiceActionController to post new data to the actions available
        'as' => 'add_action'
    ]);
    
}); 