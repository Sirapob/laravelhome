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

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('/hello', function()
{
	return '<h1>Hello World</h1>';
});
//การใช้งาน File Input
Route::get('myFilefield','ExamFormController@myFilefield');
Route::get('myDDL','ExamFormController@myDDL');
Route::get('myButton','ExamFormController@myButton');
Route::get('url','ExamRequestController@url');
Route::get('path','ExamRequestController@path');
Route::get('segment/p1/p2','ExamRequestController@segment');
Route::get('server','ExamRequestController@server');
Route::any('inputGet','ExamInputController@inputGet');
Route::any('inputAll','ExamInputController@inputAll');
Route::any('inputOnly','ExamInputController@inputOnly');
Route::get('sessionPut','ExamSessionController@sessionPut');