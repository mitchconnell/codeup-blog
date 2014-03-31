@extends('layouts.master')

@section('content')
	<h1>Edit Post</h1>
	{{ Form::open(array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
		@include('posts.form')
	{{ Form::close() }}
	@stop