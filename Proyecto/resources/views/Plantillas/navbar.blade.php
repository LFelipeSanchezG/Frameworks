<!DOCTYPE html>
<html>

<head>
	<title>@yield('titulo')</title>
  <link rel="shortcut icon" href="img/AVATAR.png">
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
          <a class="navbar-brand" href="{{route('index')}}">Tu Elegancia</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto my-navbar">
              <li class="nav-item">
                <a class="nav-link cambio" href="{{route('index')}}"><i class="fas fa-home"></i> Inicio<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link cambio" href="{{route('catalogo')}}"><i class="fas fa-book"></i> Categorias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link cambio" href="#!"><i class="fas fa-tshirt"></i> Productos</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link cambio" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" style="color: black;">
                  Nosotros
                </a>
                <div class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item cambio" href="{{route('nosotros')}}"><i class="fas fa-users"></i> Nuestra Historia</a>
                  <a class="dropdown-item cambio" href="#!"><i class="far fa-handshake"></i> Nuestra Filosofia</a></div>
              </li>
              <li class="nav-item">
                <a class="nav-link cambio" href="{{route('contacto')}}"><i class="fas fa-envelope"></i> Contáctanos</a>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link cambio" href="{{route('registro')}}"><i class="fas fa-user-tie"></i> Registrate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link cambio" href="{{route('login')}}"><i class="fas fa-sign-in-alt"></i> Login</a>
              </li>
              <li class="nav-item">
                <a href=""><i class="fas fa-shopping-basket fa-lg"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div><!--Fin fila del header-->

@yield('contenido')

<!-- FOOTER -->
<div class="cont1">
  <div class="row justify-content-md-center"><!--Inicio fila del footer-->
    <div class="col">
      <nav class="navbar navbar-dark bg-dark navi">
        <div class="col">
              
        </div>
        <div class="col-lg-2">
          <br><center><img src="img/AVATAR.png" class="img-f"></center><br>
        </div>
        <div class="col-lg-2">
          <h5>Menú</h5>
          <a href="{{route('index')}}" class="cambio-f">Inicio</a><br>
          <a href="{{route('catalogo')}}" class="cambio-f">Categorias</a><br>
          <a href="#!" class="cambio-f">Productos</a><br>
          <a href="{{route('contacto')}}" class="cambio-f">Contáctanos</a>
        </div>
        <div class="col-lg-4">
          <h5>Siguenos</h5>
          <center><p class="txt-footer">Sigue conectado con nosotros: <i class="fas fa-at"></i>tuelegancia</p>
          <a href=""><i style="color:#3A5897;" class="fab fa-facebook-f fa-lg"></i></a>
          <a class="sep2" href=""><i style="color:#F99680;" class="fab fa-instagram fa-lg"></i></a>
          <a class="sep2" href=""><i style="color:#2FC7F2;" class="fab fa-twitter fa-lg"></i></a></center><br><br>              
        </div>
        <div class="col-lg-3">
          <h5>Contáctanos</h5>
          <center><p class="txt-footer"><i class="fas fa-map-marker-alt"></i> Gutierrez Zamora, Veracruz</p>
          <p class="txt-footer"><i class="fas fa-phone"></i> +52 7841123748</p>
          <p class="txt-footer"><i class="fas fa-envelope"></i> tuelegancia@gmail.com</p></center>
        </div>
        <div class="col">
          
        </div>
      </nav>
    </div>
  </div>
</div>

<div class="cont2">
  <div class="row">
    <div class="col">
      <center><p class="txt-footer">Copyright © 2020 - <a class="pag" href="" style="color: red;">tuelegancia.com.mx</a></p></center>
    </div>      
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