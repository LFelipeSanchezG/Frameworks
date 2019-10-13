@extends('Plantillas.navbar')

@section('titulo','Inicio')

@section('contenido')
<div class="container1">
	<div class="row justify-content-md-center">
		<div class="col-lg-4">
			<img src="img/emblema.png" class="emblem">
			<br><br><center><div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			    	<img src="img/1.jpg" class="d-block w-65" alt="...">
			    </div>
			    <div class="carousel-item">
			      	<img src="img/2.jpg" class="d-block w-65" alt="...">
			    </div>
			    <div class="carousel-item">
			      	<img src="img/3.jpg" class="d-block w-65" alt="...">
			    </div>
			  </div>
			</div>
		</center>
		</div>
		<div class="col-lg-4">
			<center><br>
				<img src="img/cinta.png" class="cinta">
			<h2 class="etiq">CREADO NATURALMENTE</h2>
			<br><br><br><br><hr>
			<div class="container3"><h2 class="pros">PROCESO RESPONSABLE</h2></div><br>
			<P class="txt">PRODUCTOS PARA LA PIEL<br>
			   CREADOS ÉTICAMENTE<br>
			   SIN PRUEBAS EN ANIMALES</P>

			<P class="txt-min">(y también excelentes para ti)</P>
			<hr>
			<h1 class="comerc">COMERCIO JUSTO</h1>
			<hr>
			<button type="button" class="btn btn-dark btnt-lg btn-block bot2" style="background-color: #333333; color: #fff; font-size: 13px;">COMPRAR AHORA</button><br><br>
		</center></div>
	</div>	
</div>
<div class="container2">
	<br><br>
	<div class="row justify-content-md-center">
		<div class="col-lg-2">
			<img src="img/01.jpg">
		</div>
		<div class="col-lg-2">
			<h3 style="font-size: 22px;font-weight: bold;">REMEDIO PARA LA GRIPE</h3>
			<p style="font-size: 13px;font-family: book antiqua;margin-top:20px;">VISTA GENERAL DE UN PRODUCTO. AQUÍ PUEDES AGREGAR MÁS INFORMACIÓN SOBRE TU PRODUCTO.</p><br>
			<p style="font-size: 16px;">El remedio más solicitado</p>
			<button type="button" class="btn btn-dark btnt-lg btn-block bot1">AGREGAR</button>
		</div>
		<div class="col-lg-2">
			<img src="img/02.jpg">
			<img class="img-cal" src="img/calidad.png">
		</div>
		<div class="col-lg-2">
			<h3 style="font-size: 22px;font-weight: bold;">EXFOLIANTE VEGETAL</h3>
			<p style="font-size: 13px;font-family: book antiqua;margin-top:20px;">VISTA GENERAL DE UN PRODUCTO. AQUÍ PUEDES AGREGAR MÁS INFORMACIÓN SOBRE TU PRODUCTO.</p><br>
			<p style="font-size: 16px;">Línea para la piel</p>
			<button type="button" class="btn btn-dark btnt-lg btn-block bot1">AGREGAR</button>
		</div>
	</div><br><br>
</div>
@endsection