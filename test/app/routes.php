<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
 
if (Auth::check())

{
	Route::post('tasks/{id}', array('uses' => 'TasksController@store'));	
	Route::get('tasks/{id}/proj', array('uses' => 'TasksController@index'));
	Route::get('tasks/create/{id}', array('uses' => 'TasksController@create'));
    Route::resource('tasks', 'TasksController');
    Route::resource('projects', 'ProjectsController');
	// route to show the login form
}
	Route::get('login', array('uses' => 'HomeController@showLogin'));


	// route to process the form

	Route::post('login', array('uses' => 'HomeController@doLogin'));
	Route::get('logout', array('uses' => 'HomeController@doLogout'));

   
