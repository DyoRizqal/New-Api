<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="{{ url('http://fonts.googleapis.com/icon?family=Material+Icons') }}" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{ url('css/materialize.min.css') }} "  media="screen,projection"/>
      <script type="text/javascript" src="{{ url('js/materialize.min.js') }}"></script>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
<!-- <ul id="dropdown1" class="dropdown-content">
  <li><a href="{{ url('master/currency') }}"> Currency </a></li>
  <li><a href="{{ url('master/country') }}"> Country </a></li>
  <li><a href="{{ url('master/lang') }}"> Language </a></li>
  <li><a href="{{ url('master/airport') }}"> Airport </a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <a href="{{ url('/') }}" class="brand-logo center"> API Laravel Project </a>
    <ul class="right hide-on-med-and-down">
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Master<i class="material-icons right">dns</i></a></li>
      <li><a href="{{ url('reservasi/flight') }}">Flight</a></li>
    </ul>
  </div>
</nav> -->
        <nav>
          <div class="nav-wrapper">
            <a href="{{ url('/') }}" class="brand-logo center"> API Laravel Project </a>
            <ul class="right hide-on-med-and-down">
              <li><a href="{{ url('master/currency') }}">Currency</a></li>
              <li><a href="{{ url('master/country') }}">Country</a></li>
              <li><a href="{{ url('master/lang') }}">Language</a></li>
              <li><a href="{{ url('master/airport') }}">Airport</a></li>
            </ul>
          </div>
        </nav>
      <div class="container">
    @yield('content')
    </div>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="{{ url('https://code.jquery.com/jquery-2.1.1.min.js') }}"></script>

      @yield('footer')

    </body>
  </html>
<script type="text/javascript">
$( document ).ready(function)
$(".dropdown-button").dropdown();
</script>