@extends('plantillas.plantilla_1')

@section('titulo','Tienda')

@section('contenido')
<div class="row">
	<div class="col">
		<h2 class="titulo"><p>TIENDA</p></h2>
	</div>
</div>

@for($i=0;$i<3;$i++)

<div class="row justify-content-md-center">
	<div class="col-lg-2">
		<div class="img-tienda">
		<a href="{{route('detallesProducto')}}"><img class="img-fluid" src="img/ropa1.jpg"></a>
		<div class="pre-img-tienda">
		<p class="txt-img-tienda">Vista rápida</p>
		</div>
		</div>
		<p class="precio">Soy un producto<br>
			$100.00 MXN
		</p>
	</div>
	<div class="col-lg-2">
		<div class="img-tienda">
		<a href="{{route('detallesProducto')}}"><img class="img-fluid" src="img/ropa2.jpg"></a>
		<div class="pre-img-tienda">
		<p class="txt-img-tienda">Vista rápida</p>
		</div>
		</div>
		<p class="precio">Soy un producto<br>
			$100.00 MXN
		</p>
	</div>
	<div class="col-lg-2">
		<div class="img-tienda">
		<a href="{{route('detallesProducto')}}"><img class="img-fluid" src="img/ropa3.jpg"></a>
		<div class="pre-img-tienda">
		<p class="txt-img-tienda">Vista rápida</p>
		</div>
		</div>
		<p class="precio">Soy un producto<br>
			$100.00 MXN
		</p>
	</div>
	<div class="col-lg-2">
		<div class="img-tienda">
		<a href="{{route('detallesProducto')}}"><img class="img-fluid" src="img/ropa4.jpg"></a>
		<div class="pre-img-tienda">
		<p class="txt-img-tienda">Vista rápida</p>
		</div>
		</div>
		<p class="precio">Soy un producto<br>
			$100.00 MXN
		</p>
	</div>
</div>
@endfor
@endsection