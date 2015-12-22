<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ToolPlan</title>

<style type="text/css">

.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}

</style>
    {!! Html::style('assets/css/bootstrap.css') !!}

           
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">ToolPlan</a>
        </div>

  @if (Auth::check())
        <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
        <li><a href="#">Home<span class="sr-only">(current)</span></a></li>

        <li>
            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Archivo<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ asset('files') }}">Ver Listado</a></li>
            <li><a href="{{ asset('files/new') }}">Agregar Archivo</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Bolsas</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="{{ asset('files/bag/new') }}">Agregar Bolsa</a></li>
                </ul>
            </li>
            <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Casilleros</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="{{ asset('files/locker/new') }}">Agregar Casillero</a></li>
                </ul>
            </li>
          </ul>
        </li>
        </li>

        <li>
            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Directorio<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ asset('directory') }}">Ver Listado</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Instituciones</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="{{ asset('institution') }}">Agregar Institución</a></li>
                </ul>
            </li>
            <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Grupos</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="{{ asset('organization') }}">Agregar Grupo</a></li>
                </ul>
            </li>
          </ul>
        </li>
        </li>






    </ul>
  </div>
@endif
    </div>
</nav>

@yield('content')

<!-- Scripts -->
{!! Html::script('assets/js/jquery-1.11.3.js') !!}
{!! Html::script('assets/js/bootstrap.min.js') !!}

</body>
</html>