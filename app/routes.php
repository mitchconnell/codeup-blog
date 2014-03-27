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

// Route::get('/sayhello', function()
// {
//     return "Hello, Codeup!";
// });

Route::get('/resume', function()
{
    return View::make('resume');
});

Route::get('/portfolio', function()
{
    return View::make('portfolio');
});

// Route::get('/rolldice/{name}' ,function($name)
// {
//     return View::make('my-first-view');
// });

Route::get('/rolldice/{guess}',function($guess)
{
	$random = rand(1, 6);
	$data = array(
		'guess' => $guess,
		'random' => $random
		);
	return View::make('roll-dice')->with($data);
}); 









