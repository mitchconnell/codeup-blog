<?php

class PostsController extends \BaseController {

	public function __construct()
	{
		parent::__construct();

		$this->beforeFilter('auth', array('except' => array('index', 'show')));

		$this->beforeFilter('post.protect', array('only' => array('edit', 'update', 'destroy')));
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$search = Input::get('search');
		$query = Post::with('user')->orderBy('created_at', 'desc');
		if (is_null($search))
		{
			$posts = $query->paginate(4);

		} else {

			$posts = $query->where('title', 'LIKE', "%{$search}%")
						   ->orWhere('body', 'LIKE', "%{$search}%")	
							->paginate(4);
		}
		return View::make('posts.index')->with(array('posts' => $posts));
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create')->with('post', new Post());
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// create the validator
    	$validator = Validator::make(Input::all(), Post::$rules);
    	// attempt validation
    	if ($validator->fails())
    	{
    	Session::flash('errorMessage', 'Post could not be created - see form errors');
        // validation failed, redirect to the post create page with validation errors and old inputs
        return Redirect::back()->withInput()->withErrors($validator);
    	
    	} else {

			$post = new Post();
			$post->user_id = Auth::user()->id;
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			if (Input::hasFile('image'))
			{
				$post->assignImage(Input::hasFile('image'));
			}
			$post->save();
			Session::flash('successMessages', 'Post updated successfully' );
			return Redirect::action('PostsController@index');
	    }
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.show')->with('post', $post);
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.edit')->with('post', $post);
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);
		// create the validator
    	$validator = Validator::make(Input::all(), Post::$rules);
    	// attempt validation
    	if ($validator->fails())
    	{
        // validation failed, redirect to the post create page with validation errors and old inputs
        return Redirect::back()->withInput()->withErrors($validator);
    	
    	} else {
			// Save to db
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();
			return Redirect::action('PostsController@show', $post->id);
	    }
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Post::find($id)->delete();
		return Redirect::action('PostsController@index');
	}
}
