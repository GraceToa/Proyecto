<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>@section('title')ADE @show</title>


	{!! Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
	{!! Html::style('bower_components/bootstrap-material-desig/dist/css/material.min.css') !!}
	{!! Html::style('bower_components/bootstrap-material-desig/dist/css/riples.min.css') !!}
	{!! Html::style('bower_components/bootstrap-material-desig/dist/css/material-fullpalette.min.css') !!}
	{!! Html::style('bower_components/bootstrap/dist/css/style.css') !!}

	<link rel="stylesheet" href="css/style.css">
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
				
			</div>

			<div class="collapse navbar-collapse proba" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">

					<li><a href="{{ url('/') }}">Inicio</a></li>
					<li><a class="titulo" href="#">Asociación Defensa Équidos ADE </a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Registro</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Cerrar sesión</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->

	{!! Html::script('bower_components/jquery/dist/jquery.min.js')!!}
	{!! Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js')!!}
	{!! Html::script('bower_components/bootstrap-material-design/dist/js/ripples.min.js')!!}
	{!! Html::script('bower_components/bootstrap-material-design/dist/js/material.min.js')!!}
	

	<script type="text/javascript">
		$(document).on('ready', function(){
			$.material.init();
		});
	</script>
</body>
</html>







