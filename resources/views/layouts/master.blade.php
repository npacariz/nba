
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
        <div class="container">
            <ul class="nav navbar-nav ml-auto">
               
                @if(auth()->check())
                  <li><a href="/">Home</a></li>
                  <li><a href="/news">News</a></li>
                  <li><a href="/news/create">Create news</a></li>
                  <li><a href="/logout" >Logout</a></li>
                  <li><a href="">{{auth()->user()->name }}</a></li>
                 
                 @else
                    <li><a href="/register" class='auto'>Register</a></li>
                    <li><a href="/login">Login</a></li>
                  @endif
            </ul>
        </div>
          

      </nav>

    <main role="main" class="container">

    <div class="col-lg-8">
       @yield('content')
    </div>
    @if(auth()->check())
    <div class="col-lg-4">
        <div class="sidebar-module sidebar-module-inset">
      
        <div class="sidebar-module">
          <h4>Team news:</h4>
          <ol class="list-unstyled">
          @foreach($tags as $tag)
            <li>
              <a href="/news/team/{{$tag->name}}">{{$tag->name}}</a>
            </li>
            @endforeach 
          </ol>
        </div>
      </div><!-- /.blog-sidebar -->

    </div><!-- /.row -->
    @endif
    </main><!-- /.container -->

   



</body>
</html>
