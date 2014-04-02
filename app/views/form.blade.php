<div>
	
	{{ Form::text('title', $post->title) }}
	{{$errors->first('title', '<p><span class="help-block">:message</span></p>') }}
</div>
<div>
	{{ Form::label('body', 'Body') }}
	{{ Form::textarea('body', $post->body) }}
	{{ $errors->first('body', '<p><span class="help-block">:message</span></p>') }}
</div>
<div>
	<!-- {{ Form::open(['url' => '/upload/image', 'files' => true, 'method' => 'post']) }} -->

</div>
{{ Form::submit('Save Post') }}	


form.blade.php