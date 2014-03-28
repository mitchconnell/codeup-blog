@extends('/layouts.master')

@section('content')

@stop

{{{ action('PostsController@store') }}}

<input type="text" name="name" value="{{{ Input::old('name') }}}">

return Redirect::action('PostsController@store')->withInput();