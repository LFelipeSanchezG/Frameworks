@extends('Plantillas.navbar')

@section('titulo','Producto')

@section('contenido')

	<div class="container2">
		<br><br><br>
		<div class="row justify-content-md-center">
			<div class="col-lg-4">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="{{route('inicio')}}" class="txt-menu">Inicio</a></li>
				    <li class="breadcrumb-item"><a href="{{route('tienda')}}" class="txt-menu">Tienda</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Producto</li>
				  </ol>
				</nav>
			</div>

			<div class="col-lg-4">
				<div class="menu">
					<a class="active">&#8249; Prev </a>|
					<a href="#" class="txt-menu">Next &#8250;</a>
				</div>
			</div>
		</div>
	<br><br>
		<div class="row justify-content-md-center">
			<div class="col-lg-5">
				<div class="cont-img2">
				   <center><img src="img/tienda1.jpg" class="img-fluid zoom"></center>
				</div><br>
				<img width="60px" src="img/tienda1.jpg"><img width="40px" src="img/tienda1.1.jpg">
				<br><br>
				<p class="txt-detalle" style="font-size: 14px;">Vista general de un producto. Escribe aquí sobre tu producto. A los clientes les gusta saber qué están comprando antes de hacerlo.</p>
			</div>
			
			<div class="col-lg-3">
				<h3 class="txt-detalle" style="font-size: 26px;">Producto</h3>
				<p class="txt-detalle" style="font-size: 14px;">
					SKU: 0005
				</p>
				<h2 class="txt-detalle" style="font-size: 20px;">€19.99</h2>
				<p class="txt-detalle" style="font-size: 15px;">Quantity</p>
				<input class="cantidad" type="number" name="cantidad" value="1"><br><br>
				<button type="button" class="btn btnt-lg btn-block btn-carrito">ADD TO CART</button><br><br>

				<h5 class="txt-detalle" style="font-size: 14px;">INFO DEL PRODUCTO</h5><br>
				<p class="txt-detalle" style="font-size: 14px;">
				Información del producto (EXTENSA): Detalles del producto. Agrega aquí más detalles sobre tu producto como tamaño, material e instrucciones de cuidado y de limpieza. También puedes incluir especificaciones del producto, información sobre el envío, ingredientes y otros aspectos.
				</p>
				<hr>
				<h5 class="txt-detalle" style="font-size: 14px;">POLÍTICA DE DEVOLUCIÓN Y REEMBOLSO</h5><br>
				<p class="txt-detalle" style="font-size: 14px;">
				Soy una política de devolución y reembolso. Una oportunidad ideal para explicarles a tus clientes qué hacer en caso de no estar satisfechos con su compra. Al ofrecerles una política de reembolso clara y sencilla, generas confianza y credibilidad en tus clientes, pues saben que en tu tienda pueden realizar compras con altos niveles de seguridad.
				</p>
				<a href=""><i style="color:#3A5897;" class="fab fa-facebook-f"></i></a>
				<a class="sep2" href=""><i style="color:#F99680;" class="fab fa-google-plus-g"></i></a>
                <a class="sep2" href=""><i style="color:#2FC7F2;" class="fab fa-twitter"></i></a>                
                <a class="sep2" href=""><i style="color:#F01951;" class="fab fa-pinterest-p"></i></a>
			</div>
		</div>		
	<br><br><br>
</div>

@endsection