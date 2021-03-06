<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <a class="navbar-brand active" href="/"><i class="glyphicon glyphicon-home"></i></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      @if(Auth::user())
      <ul class="nav navbar-nav">
      @if(Auth::user()->perfil=='root')
        <li><a href="{{ route('Admin.Users.index') }}">Usuarios <span class="sr-only">(current)</span></a></li>
      @endif
        <li><a href="{{ route('Admin.Clients.index') }}">Mis Clientes <span class="sr-only">(current)</span></a></li>
        <li><a href="{{ route('Admin.Sender.index') }}">Bombardear</a></li>
      @if(Auth::user()->perfil=='root')
        <li><a href="{{ route('Admin.Sender.listarcorreos') }}">Correos</a></li>
      @endif
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="glyphicon glyphicon-user"></i> {{ Auth::user()->name }} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            @if(Auth::user()->perfil=='root')
            <li><a href="{{ route('Admin.Users.index') }}">Usuarios</a></li>
            @endif
            <li><a href="{{ route('Admin.Clients.index') }}">Mis Clientes</a></li>
            <li><a href="{{ route('Admin.Sender.index') }}">Bombardear</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('Admin.Auth.logout') }}">Cerrar Sesion</a></li>
          </ul>
        </li>
      </ul>
      @endif
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>