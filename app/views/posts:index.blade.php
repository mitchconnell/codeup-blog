@extends('layouts.master')

@section('content')
	<h1>List Posts</h1>
	@foreach ($posts as post)

	<p>
		<a href="{{{action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a>
		{{ $post->created_at->format('l, F jS Y @ ') }}
	</p>
	@endforeach
	{{ $posts->links() }}
	<hr>
	<p>
		<a href="{{{ action('PostControllers@create') }}}">Create New Post</a>
	</p>
@stop