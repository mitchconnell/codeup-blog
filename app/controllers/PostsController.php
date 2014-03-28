<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// list all data
		return 'this is index';
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// return view with form to create post
		return 'this is create';
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//save tp database, return to index
		return 'this is store';
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//pass id/param show that record
		return 'this is show id'
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//pass id/param edit that record
		return 'this is edit'
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//checks, saves, redirects
		return 'this is update'
		//$post = Post::find($id);

		//$validator = Validator::make(Input::all(), Post::$rules);

		//if ($validator->fails())
		//{
			//return Redirect::back()->withInput()->withErrors($validator);

		//}
			//else
		//{
			//$post->title = Input::get('title');
			//$post->body = Input::get('body');
			//$post->save();
			//return Redirect::action('PostsController@index');
		//}
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//delete that 1, redirect
		return 'this is destroy'
		//Post::find($id)->delete();
		//return Redirect::action('PostsController@index');


	}
}

