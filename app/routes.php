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
	return '<h1>Hello World 555666</h1>';
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
Route::any('inputExcept','ExamInputController@inputExcept');
Route::get('sessionPush','ExamSessionController@sessionPush');
Route::get('sessionAll','ExamSessionController@sessionAll');
Route::get('sessionForget','ExamSessionController@sessionForget');
Route::get('sessionFlush','ExamSessionController@sessionFlush');
Route::get('cookieForever','ExamCookieController@cookieForever');

Route::get('testBelongsTo',function(){
	$model = Book::all();
	return View::make('test_relation.belongsTo')->with('model',$model);
});
Route::get('testHasMany',function(){
	$model = Category::all();
	return View::make('test_relation.hasMany')->with('model',$model);
});

Route::any('create','ExamModelController@create');
Route::get('read','ExamModelController@read');
Route::any('update/{id}','ExamModelController@update');
Route::get('delete/{id}','ExamModelController@delete');

Route::get('myPagination','ExamModelController@myPagination');
