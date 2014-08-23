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
	return View::make('homepage');
});


//Practice
Route::get('our/response', function()
{
$response = Response::make('The name is Bond, James Bond.', 200);
$response->setTtl(60); 
return $response;
});


Route::get('markdown/response', function()
{
$data = array('iron', 'man', 'rocks');
return Response::json($data);
});


Route::get('file/download', function()
{
$file = 'path_to_my_file.pdf';
return Response::download($file, 418, array('iron', 'man'));
});