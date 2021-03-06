@extends('layouts.master')

@section('content')
	<h1>{{{ $post->title }}}</h1>
		<p>{{ $post->body }}</p>
			<p>{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}</p>
			<p>
				<a href="{{{ action('PostsController@index') }}}">Return To Post</a>
		</p>
			<button type="button" class="btn btn-default btn-lg">
  				<span class="glyphicon glyphicon-edit"><a href="{{{ action('PostsController@edit', $post->id ) }}}">Edit Post</a></span> 
			</button>
			<button type="button" class="btn btn-default btn-lg">
  				<span class="glyphicon glyphicon-trash"><a href="#" id="btnDeletePost">Delete Post</a></span> 
			</button>

			{{ Form::open(array('action' => array('PostsController@destroy',$post->id), 'method' => 'delete', 'id' => 'formDeletePost')) }}
			{{ Form::close() }}
		
@stop
  
@section('bottom')
	<script>
		$('#btnDeletePost').on('click', function(e) {
			e.preventDefault();
			if (confirm('Are you sure you want to delete the post?')) {
				$('#formDeletePost').submit();
			};				
		}); 
	</script>

@stop

