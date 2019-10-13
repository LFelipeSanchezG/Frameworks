@extends('Plantillas.navbar')

@section('titulo','Login')

@section('contenido')

<div class="cont-reg">
		<br><br>
		<div class="row justify-content-center">
			<div class="col-lg-5 col-sm-8 register-left">
				<img src="img/mm.jpg" style="width: 40%; border-radius: 30%;"><br><br>
          		<h3>¡BIENVENIDO!</h3><br>
          	</div>
			<div class="col-lg-5 col-sm-8 register-right">
				<center><img src="img/AVATAR.png" style="width: 50px;"></center>
		          <h2>Iniciar Sesión</h2>
		          <div class="register-form">
		            <form action="" method="post">
		              <div>
		                <input required type="email" class="form-control" name="correo" placeholder="Correo">
		              </div><br>
		              <div>
		                <input required type="password" class="form-control" name="clave" placeholder="Contraseña">
		              </div>
              			<input type="hidden" name="entrar" value="entrar"><center>
             			<button type="submit" class="btn btn-primary" style="width: 130px;">Iniciar Sesión</button></center><br>
		            </form><br><br><br>
		            <center><a href="" style="color: red;">¿Olvido su contraseña?</a></center>
		            <div class="or">
		              <hr class="bar" />
		              <span style="color: #ccc;"> O </span>
		              <hr class="bar" />
		            </div>
		            <center><a href="" class="secondary-btn" style="color: red;"> ¡Registrate Ahora! </a></center>
		          </div>
			</div>
		</div>
			<br><br>
	</div>

@endsection
