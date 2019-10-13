@extends('Plantillas.navbar')

@section('titulo','Inicio')

@section('contenido')
	<div class="row">
		<div class="col">
			<div id="demo" class="carousel slide" data-ride="carousel">
			  <ul class="carousel-indicators">
			    <li data-target="#demo" data-slide-to="0" class="active"></li>
			    <li data-target="#demo" data-slide-to="1"></li>
			    <li data-target="#demo" data-slide-to="2"></li>
			  </ul>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="img/bg01.jpg" alt="Slider1" style="width: 100%;">  
			    </div>
			    <div class="carousel-item">
			      <img src="img/bg02.jpg" alt="Slider2" style="width: 100%">   
			    </div>
			    <div class="carousel-item">
			      <img src="img/bg03.jpg" alt="Slider3" style="width: 100%">  
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
			    <span class="carousel-control-next-icon"></span>
			  </a>
			</div>
		</div>		
	</div>
	
	<div class="cont-index">
		<br><br>
		<div class="row sz justify-content-md-center">
			<div class="col">
				
			</div>
			<div class="col-lg-2 col-sm-8">
				<div class="cont-img">
					<center><img src="IMG/dama.jpg" class="img-fluid cat-img"></center>
				</div>
				<center><P class="txt-img">DAMA</P></center>
			</div>
			<div class="col">
				
			</div>
			<div class="col-lg-2 col-sm-8">
				<div class="cont-img">
					<center><img src="IMG/caballero.jpg" class="img-fluid cat-img"></center>
				</div>
				<center><P class="txt-img">	CABALLERO</P></center>
			</div>
			<div class="col">
				
			</div>
		</div>
		<br><br>
	</div>

@endsection