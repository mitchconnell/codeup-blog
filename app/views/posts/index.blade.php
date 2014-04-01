@extends('layouts.master')

@section('content')
	

	{{ Form::open(array('action' => 'PostsController@index'), 'method' => 'GET')) }}
		{{ Form::label('search', 'Search Posts') }}
		{{ Form::text('search') }}
		{{ Form::submit('Search') }}
{{ Form::close() }}
	<h1>List Posts</h1>
	@foreach ($posts as $post)
	<p>
		<a href="{{{action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a>
		<p>{{ Str::words($post->body, 10) }}</p>
		{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}
	</p>
	<hr>
	@endforeach
	{{ $posts->appends(array('search' => Input::get('search')))->links() }}
	<hr>
	<p>
		<a href="{{{ action('PostsController@create') }}}">Create New Post</a>
	</p>
@stop