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

// Route::get('/', function()
// {
//     return View::make('hello');
// });

// Route::get('/sayhello', function()
// {
//     return "Hello, Codeup!";
// });

// Route::get('/resume', function()
// {
//     return View::make('resume');
// });

// Route::get('/portfolio', function()
// {
//     return View::make('portfolio');
// });

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
Route::resource('posts', 'PostsController');

Route::get('/', 'PostsController@index');

Route::get('/sayhello/{name}', 'HomeController@sayhello');

Route::get('/login', 'HomeController@showLogin');
Route::post('/login', 'HomeController@doLogin');

Route::get('/logout', 'HomeController@logout');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

 // Route::get('/image/{size}/{file}', 'ImageController@getImage');

Route::get('orm-test', function () {
    // test code here
    $post1 = new Post();
$post1->title = "Eloquent is awesome!";
$post1->body = "It is super easy to create a new post.";
$post1->save();

$post2 = new Post();
$post2->title = "Post number two";
$post2->body = "The body for post number two.";
$post2->save();
});
