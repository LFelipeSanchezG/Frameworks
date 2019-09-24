@extends('plantillas.plantilla_1')

@section('titulo','Index')

@section('contenido')
		<div class="row">
			<div class="col">
				<div id="img-fondo">
					<div class="jumbotron">
  						<h1 class="display-4 txt-jumbo">DIOSES EGIPCIOS</h1>
  						<center><a class="btn btn-primary btn-lg" href="#!" role="button">Comprar</a></center>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<p class="txt-centrado">ES HORA DE DE DE DE DE DE DEL DUELO</p>
			</div>
		</div>
		<div class="row sz justify-content-md-center">
			<div class="col-lg-2 col-sm-8">
				<div class="cont-img">
					<center><img src="IMG/ra.png" class="img-fluid cat-img"></center>
				</div>
				<P class="txt-img">DRAGÓN ALADO DE RA</P>
			</div>
			<div class="col-lg-2 col-sm-8">
				<div class="cont-img">
					<center><img src="IMG/obelisko.png" class="img-fluid cat-img"></center>
				</div>
				<P class="txt-img">OBELISCO EL ATORMENTADOR</P>
			</div>
			<div class="col-lg-2 col-sm-8">
				<div class="cont-img">
					<center><img src="IMG/slifer.png" class="img-fluid cat-img"></center>
				</div>
				<p class="txt-img">SLIFER, EL DRAGÓN DE LOS CIELOS</p>
			</div>
		</div>
		<div class="row">
			
		</div>

		<ul id="materias">
			<li>Realidad Aumentada</li>
			<li>Frameworks para Desarrollo Web</li>
		</ul>

		<form>
			<input id="nombre" type="text" name="nombre">
			<input id="boton" type="submit" name="boton">
			<input id="agregar" type="submit" name="agregar" value="agregar"><br>
		</form>
@endsection