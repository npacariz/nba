
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>NBA</title>

    <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="/css/custom.css"/>
    
  </head>

  <body>
        <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                  </div>
                  <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                   
                    @if(auth()->check())
                    <li><a href="/logout">Logout</a></li>
                    <li><a href="">{{auth()->user()->name }}</a></li>
                    @else
                    <li><a href="/register">Register</a></li>
                    <li><a href="/login">Login</a></li>
                    @endif
                  </ul>
                </div>
              </nav>

    <main role="main" class="container">

     
        @yield('content')
    

    </main><!-- /.container -->

  </body>
</html>
