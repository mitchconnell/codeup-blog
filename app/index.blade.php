@extends('layouts.master')

@section('content')
	<h1>List Posts</h1>
	@foreach ($posts as post)

	<p>
		<a href="{{{action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a>
	</p><!-- Created: {{ $post->}} -->
	@endforeach
	{{ $posts->links() }}
	<hr>
	<p>
		<a href="{{{ action('PostControllers@create') }}}">Create New Post</a>
	</p>
@stop