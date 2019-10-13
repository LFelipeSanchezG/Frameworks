@extends('Plantillas.navbar')

@section('titulo','Tienda')

@section('contenido')

<div class="container1">
	<div class="row">
		<div class="col">
			<br><br><br>
			<center><h1 style="font-family: Calisto MT;font-size: 55px;">Productos para tu piel y cabello</h1>
			<h2 class="hid">HIDRATA - CURA - REVITALIZA</h2>
			<img src="img/cinta.png" width="750px"><br><br>
			<p style="font-family: Segoe UI;font-size: 16px;">TODOS NUESTROS PRODUCTOS SON DE PROCEDENCIA RESPONSABLE, CREADOS DE<br>MANERA ÉTICA Y NUNCA SON PROBADOS EN ANIMALES. </p></center><br><br><br>
		</div>		
	</div>
</div>

<div class="container2">
<br><br><br>
	<div class="row justify-content-md-center">
		<div class="col-lg-2">
			<div class="img-tienda cont-img">
				<a href="{{route('producto1')}}"><img class="img-fluid zoom" src="img/tienda1.jpg"></a>
				<div class="pre-img-tienda">
					<p class="txt-img-tienda">QUICK VIEW</p>
				</div>
			</div>
			<p class="precio">Producto<br>
			<span class="num">€19.99</span></p>	
		</div>
		<div class="col-lg-2">
			<div class="img-tienda cont-img">
				<a href="#"><img class="img-fluid zoom" src="img/tienda2.jpg"></a>
				<div class="pre-img-tienda">
					<p class="txt-img-tienda">QUICK VIEW</p>
				</div>
			</div>
			<p class="precio">Producto<br>
			<span class="num">€19.99</span></p>
		</div>
		<div class="col-lg-2">
			<div class="img-tienda cont-img">
				<a href="#"><img class="img-fluid zoom" src="img/tienda3.jpg"></a>
				<div class="pre-img-tienda">
					<p class="txt-img-tienda">QUICK VIEW</p>
				</div>
			</div>
			<p class="precio">Producto<br>
			<span class="num">€19.99</span></p>
		</div>
		<div class="col-lg-2">
			<div class="img-tienda cont-img">
				<a href="#"><img class="img-fluid zoom" src="img/tienda4.jpg"></a>
				<div class="pre-img-tienda">
					<p class="txt-img-tienda">QUICK VIEW</p>
				</div>
			</div>
			<p class="precio">Producto<br>
			<span class="num">€19.99</span></p>
		</div>
	</div>

	<div class="row justify-content-md-center">
		<div class="col-lg-2">
			<div class="img-tienda cont-img">
				<img src="img/oferta.jpg" class="oferta"> 
				<a href="#!"><img class="img-fluid zoom" src="img/tienda5.jpg"></a>
				<div class="pre-img-tienda">
					<p class="txt-img-tienda">QUICK VIEW</p>
				</div>
			</div>
			<p class="precio">Producto<br>
			<span class="num2">€19.99</span><span class="num">€14.99</span></p>
		</div>
		<div class="col-lg-2">
			<div class="img-tienda cont-img">
				<a href="#!"><img class="img-fluid zoom" src="img/tienda6.jpg"></a>
				<div class="pre-img-tienda">
					<p class="txt-img-tienda">QUICK VIEW</p>
				</div>
			</div>
			<p class="precio">Producto<br>
			<span class="num">€19.99</span></p>
		</div>
		<div class="col-lg-2">
			<div class="img-tienda cont-img">
				<a href="#!"><img class="img-fluid zoom" src="img/tienda7.jpg"></a>
				<div class="pre-img-tienda">
					<p class="txt-img-tienda">QUICK VIEW</p>
				</div>
			</div>
			<p class="precio">Producto<br>
			<span class="num">€19.99</span></p>
		</div>
		<div class="col-lg-2">
			<div class="img-tienda cont-img">
				<a href="#!"><img class="img-fluid zoom" src="img/tienda8.jpg"></a>
				<div class="pre-img-tienda">
					<p class="txt-img-tienda">QUICK VIEW</p>
				</div>
			</div>
			<p class="precio">Producto<br>
			<span class="num">€19.99</span></p>
		</div>
	</div>
	<br><br><br>
</div>

@endsection