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
				<nav id="navbar-principal" class="navbar navbar-expand-lg navbar-light bg-light colorin">
          <a class="navbar-brand" href="{{route('inicio')}}">La Botica</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto my-navbar">
              <li class="nav-item active">
                <a class="nav-link blanc" href="{{route('inicio')}}">Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" style="color: black;">
                  Nosotros
                </a>
                <div class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item cambio" href="#">Nuestra Historia</a>
                  <a class="dropdown-item cambio" href="#">Nuestra Filosofia</a></div>
              </li>
              <li class="nav-item">
                <a class="nav-link cambio" href="{{route('tienda')}}">Piel y Cabello</a>
              </li>
              <li class="nav-item">
                <a class="nav-link cambio" href="#">Holística</a>
              </li>
              <li class="nav-item">
                <a class="nav-link cambio" href="#">Contáctanos</a>
              </li>
              <li class="nav-item">
                <img src="img/bolsa.png" width="25px">
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div><!--Fin fila del header-->

@yield('contenido')

<!-- FOOTER -->
<div class="row justify-content-md-center"><!--Inicio fila del footer-->
			<div class="col">
				<nav class="navbar navbar-dark bg-dark navi">
  						<div class="col">
                
              </div>
              <div class="col-lg-2">
  							<p style="font-family: book antiqua;"><b>VISITANOS</b><br>
                  Av. Los Rosales 122<br>28021, Madrid.</p><br><br>
  						</div>
  						<div class="col-lg-2">
  							<p style="font-family: book antiqua;"><b>LLAMANOS</b><br>
                  T: 914-123-4567<br>F: 914-123-4567</p><br><br>
  						</div>
  						<div class="col-lg-2">
  							<p style="font-family: sans-serif;"><b>E-MAIL</b><br>
                info@misitio.com</p>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a class="sep" href=""><i class="fab fa-twitter"></i></a>
                <a class="sep" href=""><i class="fab fa-google-plus-g"></i></a><br><br><br>
  						</div>
              <div class="col-lg-2">
                <p style="font-family: arial black;"><b>ÚNETE A NUESTRA LISTA DE CORREO</b></p>
                <input id="cantidad" type="text" name="cantidad" placeholder="Dirección de email"><br>
                <button type="button" class="btn btn-dark btnt-lg btn-block bott" style="background-color: #42BFB0; color: #396C65; font-size: 13px;">Suscríbete ahora</button>
              </div>
              <div class="col">
                
              </div>
				</nav>
			</div>
		</div>
<div class="row">
  <div class="col">
    <center><p id="uri">© 2023 por La Botica. Creado con <a class="pag" href="" style="color: white;">Wix.com</a></p></center>
  </div>      
</div>

<!--Fin fila del footer-->

	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{asset('js/wix.js')}}" type="text/javascript"></script>
</body>
</html>