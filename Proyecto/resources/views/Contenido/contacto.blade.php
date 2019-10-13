@extends('Plantillas.navbar')

@section('titulo','Contacto')

@section('contenido')

	<div class="row">
		<div class="col">
			<br><br>
      		<center><h2 class="txt-h3 section-header">PÓNGASE EN<span> CONTACTO CON NOSOTROS</span></h2></center>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-lg-5 col-sm-8">
			<br><br>
        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59802.29289799349!2d-97.1239232619243!3d20.479838453815045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x386e41cb8245d776!2sUniversidad+Tecnologica+de+Gutierrez+Zamora!5e0!3m2!1ses-419!2smx!4v1563990520383!5m2!1ses-419!2smx" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col-lg-5 col-sm-8">
			<br>
      	<form action="" method="post">
        	<div class="form-group">
          		<label for="exampleInputUsername">Nombre</label>
          		<input required type="text" class="form-control" name="nombre" id="" placeholder=" Ingresa tu nombre">
        	</div>
        	<div class="form-group">
          		<label for="exampleInputEmail">Correo</label>
          		<input required type="email" class="form-control" id="exampleInputEmail" name="correo" placeholder=" Ingresa tu correo electrónico">
        	</div>  
        	<div class="form-group">
          		<label for="telephone">Teléfono</label>
          		<input required type="telephone" class="form-control" id="telephone" name="telefono" placeholder=" Ingresa un número de 10 digitos">
        	</div>
        	<div class="form-group">
         		<label for="description"> Mensaje</label>
          		<textarea required  class="form-control" id="description" name="mensaje" rows="3" placeholder="Escribe un mensaje"></textarea>
        	</div>
        	<div>
          		<input type="hidden" value="Enviar" class="btn-form">
          		<button type="submit" class="btn btn-default submit" style="width: 100px;"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Enviar</button>
        	</div>
      	</form>
		</div>
	</div>
<br><br>
@endsection