<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://use.fontawesome.com/455b8c317a.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Cinzel:400,900&amp;subset=latin-ext" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Rolify') }}</title>
    <link rel="shortcut icon" href="icon.ico">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  {{-- cerrar --}}
  <div class="container">
      {{-- cerrar --}}


<!-- Barra de Nav -->
    <header class="navbar">
      <div class="flex-magic">
        <a href="index.php" class="logo prime">
          <img src="{{ asset('imgs/logo.png') }}" alt="Logo">
        </a>
      </div>
      <div class="flex-magic">
        <h2 class="nombre">Rolify</h2>
      </div>
      <div class="flex-magic">
          {{-- <a href="index.php" class="logo rand">
            <img src="unnamed.png" alt="Random">
          </a> --}}
          <!-- Authentication Links -->
          @if (Auth::guest())
              <li><a href="{{ route('login') }}">Login</a></li>
              <li><a href="{{ route('register') }}">Register</a></li>
          @else
              <li class="dropdown">
                  <a href="#" class="">
                      {{ Auth::user()->name }}
                      <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                  </a>
              </li>
              <li>
                  <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                      Logout
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
              </li>

          @endif
        </div>
    </header>

<!-- Barra Lateral -->
    <nav class="sidebar">
      <div class="flex-magic">
        <h3>Tables</h3>
        <i class="fa fa-angle-double-down dropdown" aria-hidden="true"></i>
        <br>
      </div>
      <div class="category">
        <h5>Starter</h5>
        <ul>
          <li>1</li>
          <li>2</li>
          <li>3</li>
        </ul>
        <br>
      </div>
      <div class="category">
        <h5>Weapons</h5>
        <ul>
          <li>1</li>
          <li>2</li>
          <li>3</li>
        </ul>
      </div>
      <div class="category">
        <h5>NPC</h5>
        <ul>
          <li>1</li>
          <li>2</li>
          <li>3</li>
        </ul>
      </div>

    </nav>

<!-- Contenido Principal -->
    <main class="content">
      <div class="flex-cont">
        @yield('content')
      </div>
    </main>

<!-- Footer -->
    <footer class="footer">

      <div class="flex-magic">
        <div class="rights">
          <hr>
          <p>Rights to the coding machine (Nico)+(Pancho)</p>
          <hr>
        </div>
      </div>

      <div class="flex-magic">
        <div class="masmagia">
            <a href="http://panchoblanco.com.ar/" class="google social-icon">
              <i class="fa fa-google" aria-hidden="true"></i>
            </a>
            <a href="http://panchoblanco.com.ar/" class="github social-icon">
              <i class="fa fa-github-alt" aria-hidden="true"></i>
            </a>
            <a href="http://panchoblanco.com.ar/" class="slack social-icon">
              <i class="fa fa-slack" aria-hidden="true"></i>
            </a>
            <a href="http://panchoblanco.com.ar/" class="youtube social-icon">
              <i class="fa fa-youtube-play" aria-hidden="true"></i>
            </a>
            <a href="http://panchoblanco.com.ar/" class="reddit social-icon">
              <i class="fa fa-reddit-alien" aria-hidden="true"></i>
            </a>
        </div>
      </div>

    </footer>

  </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
