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

Route::get('/encuesta',   function(){

    return view('survey/survey');
});

Route::get('/',  [

    'as' => 'tickets.latest',
    'uses' => 'TicketsController@latest'

    ]);


Route::get('/populares',  [

	'as' => 'tickets.populares',
	'uses' => 'TicketsController@populares'

	]);


Route::get('/pendientes',  [

	'as' => 'tickets.open',
	'uses' => 'TicketsController@open'

	]);


Route::get('/tutoriales',  [

	'as' => 'tickets.closed',
	'uses' => 'TicketsController@closed'

	]);


Route::get('/solicitud/{id}', [

	'as' => 'tickets.details',
	'uses' => 'TicketsController@details'

	]);


Route::controllers([

	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',

	]);


Route::group(['middleware' => 'auth'],function  (){
    
    ///crear solicitudes
    Route::get('/solicitar', [
        

        'uses' => 'TicketsController@create',
        
    ]);

    Route::post('/solicitar', [
        
        'as' => 'tickets.store',
        'uses' => 'TicketsController@store',
        
    ]);
    
    ///votar
    
    Route::post('votar/{id}', [
        
        'as' => 'vote.submit',
        'uses' => 'VotesController@submit',
        
    ]);
    
    Route::delete('votar/{id}', [
        
        'as' => 'vote.destroy',
        'uses' => 'VotesController@destroy',
        
    ]);
    
    //comentar
    Route::post('comentar/{id}', [
    'as' => 'comments.submit',
    'uses' => 'CommentsController@submit',
        
    ]);
    
    Route::delete('comentar/{id}', [
    'as' => 'comment.destroy',
    'uses' => 'CommentsController@destroy',
        
    ]);
    
    

    
    
});
    



