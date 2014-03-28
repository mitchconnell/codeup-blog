@extends('layouts.master')

@section('content')
	<h1>List Posts</h1>
	@foreach ($posts as post)

	<p>
		<a href="{{{action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a>
		<p>{{ Str::words($post->body, 10) }}</p>
		{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}
	</p>
	<hr>
	@endforeach
	{{ $posts->links() }}
	<hr>
	<p>
		<a href="{{{ action('PostControllers@create') }}}">Create New Post</a>
	</p>
@stop