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
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	



class HomeController extends BaseController {

    public function showWelcome()
    {
    	return View::make('my-first-view');
    }

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

}









