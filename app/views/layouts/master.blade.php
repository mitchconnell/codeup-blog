<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('PageTitle')</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/signin.css">
    <script src="/js/bootstrap.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>    
    <script src="../assets/js/bsa.js"></script>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="{{ action('HomeController@showWelcome')}}" class="navbar-brand">Home</a>
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
              <a href="../help/">Contact Me</a>
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
            <h1>@yield('h1title')</h1>
            <p class="lead">My Blog Page</p>
          @yield('content')</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
