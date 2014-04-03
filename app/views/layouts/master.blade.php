<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('PageTitle')</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="/css/blog.css">
<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  </head>
  <body>    
    <script src="../assets/js/bsa.js"></script>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">

        <div class="navbar-header">
          <a href="{{ action('PostsController@index')}}" class="navbar-brand">Home</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">            
            <li>
              <a href="http://codeup.dev/bootstrap/resume.html">Resume</a>
            </li>
            <li>
              <a href="http://codeup.dev/bootstrap/portfolio.html">Portfolio</a>
            </li>
             <li>
              <a>Contact Me</a>
              <div class="col-md-4"><a href="mailto:mitchconnell@hotmail.com">mitchconnell@hotmail.com</a></div>
            </li>            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            @if (Auth::check())
            <li><a href="{{{ action('HomeController@logout') }}}">Logout ({{{ Auth::user()->email }}})</a></li>
            @else
            <li><a href="{{{ action('HomeController@showLogin') }}}">Login</a></li>
            @endif
          </ul>
        </div>
      </div>
    </div>
    <div class="container">

      <div class="page-header" id="banner">
        <div class="row">
          <div class="col-lg-6">
            @yield('content')
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
