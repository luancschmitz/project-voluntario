<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ url('/') }}">Voluntarios</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ route('sobre') }}">Sobre</a></li>
        <li><a href="{{ route('contato') }}">Contato</a></li>
        <li><a href="{{ route('volunteer.index') }}">Voluntários</a></li>
        <li><a href="{{ route('cause.index') }}">Causas</a></li>
        <li><a href="{{ route('institution.index') }}">Instituições</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          @if(Auth::check())
              <p class="navbar-text">Bem vindo {{ Auth::user()->name }} - <a href="{{ url('/auth/logout') }}">Efetuar Logoff</a></p>
          @else
              <a href="{{ url('/auth/login') }}">Efetuar Login</a>
          @endif
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>