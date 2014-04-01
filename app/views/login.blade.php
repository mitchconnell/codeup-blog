@extends('/layouts.master')

@section('content')

   <!--  <div class="col-md-4"></div>
    <div class="col-md-12" style="background-color:#ecf0f0"> -->
	  {{ Form::open(array('action' => array('HomeController@doLogin'))) }}
        <h2 class="form-signin-heading">Please sign in</h2>
        <input name="email" type="email" class="form-control" placeholder="Email address" required autofocus>
        <input name="password" type="password" class="form-control" placeholder="Password" required>
        <label class="checkbox">
          <input name="remember" type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	{{ Form::close() }}
    
@stop