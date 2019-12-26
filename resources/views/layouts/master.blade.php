<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <title>What's up?</title>

  <!-- Custom styles for this template -->
  <link href={{ url("css/blog-home.css") }} rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Say Anything @Zuhailyyy</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <!-- <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li> -->
          <!-- Authentication Links -->
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
             <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          @endif
          @else
          <!-- <li class="nav-item">
            <a class="nav-link" href="{{ route('blog:index') }}">{{ __('All Blog') }}</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
          </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-10">
        <table>
        <tr>
          <td><h1 class="my-4">Happy New Year!
          <br><small>Share your new year's wish or thought here </small></td>
          <td><img src="https://66.media.tumblr.com/tumblr_m06n5yxh7e1qcwph1o1_500.gifv" height="120px" width="220px"></td>
        </tr>
        </table>  
        </h1>

        <!-- <img src="https://i.gifer.com/YQ.gif" height="30px" width="30px"> -->
        <!-- <img src="/public/storage/{{ "staff.jpg" }}" height="30px" width="30px" /> -->

        <!-- Blog Post -->
        @yield('content')

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget
         <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div> -->

        <!-- Categories Widget -->
         <!-- <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">Freebies</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div> -->

        <!-- Side Widget -->
        <!-- <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div> --> 

      </div>

    </div> 
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <!-- <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Baltech 2019</p>
    </div>
     /.container 
  </footer> -->

  
  <!-- Bootstrap core JavaScript -->
  <script src={{ url("vendor/jquery/jquery.min.js") }}></script>
  <script src={{ url("vendor/bootstrap/js/bootstrap.bundle.min.js") }}></script>
  <!-- Bootstrap core CSS -->
  <link href={{ url("vendor/bootstrap/css/bootstrap.min.css") }} rel="stylesheet">

</body>

</html>
