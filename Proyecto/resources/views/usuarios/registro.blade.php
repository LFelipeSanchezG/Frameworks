@extends('Plantillas.navbar')

@section('titulo','Registro')

@section('contenido')

	<div class="cont-reg">
		<br><br>
		<div class="row justify-content-center">
			<div class="col-lg-5 col-sm-8 register-left">
				<br><br><img src="img/icon.png">
		          <h3>Únete</h3>
		          <p>Si no tienes una cuenta, aqui la puedes crear.</p>
		          <button type="button" class="btn btn-primary"><a href="{{route('nosotros')}}" style="color: black;">Acerca de</a></button>
		        </div>
			<div class="col-lg-5 col-sm-8 register-right">
				<center><img src="img/AVATAR.png" style="width: 50px;"></center>
		          <h2>Registrate Aqui</h2>
		          <div class="register-form">
		          	<form action="controller_login.php" method="post">
		            <div class="form-group">
		              <input required type="email" class="form-control" name="correo" placeholder="Correo">
		            </div>
		            <div class="form-group">
		              <input required type="password" class="form-control" name="clave" placeholder="Contraseña">
		            </div>
		           
		            <center>
              		<input type="hidden" name="entrar" value="entrar">
              		<button type="submit" class="btn btn-primary" style="width: 130px;">Iniciar Sesión</button></center><br>
            		</form></div>
		          </div>
			</div>
			<br><br>
		</div>

@endsection
