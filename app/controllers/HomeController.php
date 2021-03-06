<?php
	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|
	|
	*/
class HomeController extends BaseController {

    public function sayHello($name)
    {
        $data = array('name' => $name);
        return View::make('my-first-view')->with($data);
    }

	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function showLogin()
	{

		return View::make('login');
	}

	public function doLogin()
	{
		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
		{
    		return Redirect::intended('/posts');
		}
		else 
		{
    		// login failed, go back to the login screen
    		return Redirect::back()->withInput();
		}	
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::action('PostsController@index');
	}
}
