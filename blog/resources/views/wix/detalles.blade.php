@extends('plantillas.plantilla_1')

@section('titulo','Detalles del Producto')

@section('contenido')

<div class="row justify-content-md-center">
	<div class="col-4">
		<nav id="bread1" aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="/wix">Inicio</a></li>
		    <li class="breadcrumb-item"><a href="/tienda">Tienda</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Detalles</li>
		  </ol>
		</nav>
		<div id="img-detalles">
			<img class="img-fluid" src="/img/ropa4.jpg">
		</div>
	</div>
	<div class="col-4">
		<br><br><br><br>
		<p>
			<h3>Soy un producto</h3>
			$300.00 MXN
		</p>
		Cantidad<br><br>
		<input id="cantidad" type="number" name="cantidad" value="1"><br><br>
		<button type="button" class="btn btn-dark btnt-lg btn-block">AGREGAR AL CARRITO</button>

		<p>
			<center><h5>INFORMACIÓN DEL PRODUCTO</h5></center>
			Detalles del producto. Agrega aqui más detalles sobre tu
			producto como tamaño, material e instrucciones de cuidado
			y de limpieza. También puedes incluir especificaciones
			del producto, información sobre el envío, ingredientes y
			otros aspectos.
		</p>
		<hr>
	</div>	
</div>
<div id="img-full">
	<img src="/img/ropa4.jpg">		
</div>

@endsection