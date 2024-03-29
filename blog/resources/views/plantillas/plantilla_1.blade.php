<!DOCTYPE html>
<html>
<head>
	<title>@yield('titulo')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
	<div class="container-fluid">

<!-- NAVBAR -->
		<div class="row"><!--Inicio fila del header-->
			<div class="col">
				<nav id="navbar-principal" class="navbar navbar-expand-lg navbar-dark bg-dark palafox fixed-top">
  <a class="navbar-brand" href="wix">CHICA LINDA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto my-navbar">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('wix')}}">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('tienda')}}">Tienda</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">Oferta</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Atención al Cliente</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Distribuidores</a>
      </li>
    </ul>
  </div>
</nav>
</div>
</div><!--Fin fila del header-->


@yield('contenido')

		
<!-- FOOTER -->
<div class="row"><!--Inicio fila del footer-->
			<div class="col">
				<nav class="navbar navbar-dark bg-dark">
  						<div class="col">
  							
  						</div>
  						<div class="col-3">
  							<p>SIGUE CONECTADO</p>
  							<a href=""><i class="fab fa-facebook-square"></i></a>
  							<a href=""><i class="fab fa-twitter-square"></i></a>
  							<a href=""><i class="fab fa-instagram"></i></a>
  						</div>
  						<div class="col-3">
  							<p>ESCRIBENOS</p>
  						</div>
  						<div class="col-3">
  							<p>¿NECESITAS AYUDA?</p>
  						</div>
  						<div class="col">
  							
  						</div>
				</nav>
			</div>
		</div><!--Fin fila del footer-->

	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{asset('js/wix.js')}}" type="text/javascript"></script>
</body>
</html>