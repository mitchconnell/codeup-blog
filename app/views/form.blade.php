<div>

	{{ Form::label('title, Title') }}
	{{ Form::text('title', $post->title) }}
	{{$errors->first('title', '<p><span class="help-block">:message</span></p>') }}
</div>
<div>
	{{ Form::label('body', 'Body') }}
	{{ Form::textarea('body', $post->body) }}
	{{ $errors->first('body', '<p><span class="help-block">:message</span></p>') }}
</div>
{{ Form::submit('Save Post') }}	


form.blade.php