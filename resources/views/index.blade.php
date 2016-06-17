@extends('layouts.home')

@section('gluten')
	<section id="gluten" class="bg-light-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">¿Qué es la alergia al Glúten?</h2>
					<h3 class="section-subheading text-muted"><strong>Es una condición del sistema inmunológico en la que las personas no pueden consumir glúten porque daña su intestino delgado.</strong></h3>
				</div>
			</div>			
			<div class="col-md-4 text-center">					
				<span class="fa-stack fa-4x">
					<i class="fa fa-circle fa-stack-2x text-primary"></i>
					<i class="fa fa-pagelines fa-stack-1x fa-inverse"></i>
				</span>
				<h4 class="service-heading">¿Qué es el Glúten?</h4>
				<p><strong><em>Es una glicoproteína</em></strong>.</p>
				<p class="text-justify">Actúa como elemento aglutinante; es el cemento que une los diversos ingredientes en la panadería y la pastelería. Es responsable de la consistencia elástica de las masas.</p>
			</div>
			<div class="col-md-4 text-center">
				<span class="fa-stack fa-4x">
					<i class="fa fa-circle fa-stack-2x text-primary"></i>
					<i class="fa fa-cutlery fa-stack-1x fa-inverse"></i>
				</span>
				<h4 class="service-heading">¿Dónde se encuentra?</h4>
				<p><strong><em>En el trigo, centeno, cebada y derivados</em></strong>.</p>
				<p class="text-justify">Recuerda que se encuentra en muchos alimentos fabricados con estos cereales. Por ejemplo el pan, las galletas, los pasteles, la salsa de soja, los condimentos y en todo alimento que contengan harina o almidón.</p>
			</div>
			<div class="col-md-4 text-center">
				<span class="fa-stack fa-4x">
					<i class="fa fa-circle fa-stack-2x text-primary"></i>
					<i class="fa fa-hospital-o fa-stack-1x fa-inverse"></i>
				</span>
				<h4 class="service-heading">¿Existe un tratamiento?</h4>
				<p><strong><em>Sí, el hábito de una dieta estricta sin glúten.</em></strong></p>					
				<p class="text-justify">Debe ser una hábito para toda la vida. Una dieta basada en alimentos naturales, cereales sin gluten evitarse y en la medida de lo posible, los alimentos elaborados y/o envasados.</p>
			</div>
			<div class="row text-center">
			<div class="col-md-offset-4 col-md-4">
					<a class="btn btn-xl" style="margin-top:25px" href="{{ route('informacion.index')}}" >Cuéntame más</a>
			</div>
		</div>
		</div>
	</section>
@endsection

@section('celiaco')
<section id="celiaco">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">¿Soy Celiaco?</h2>
				<h3 class="section-subheading text-muted"><strong>Cómo saber si soy celiaco y qué puedo hacer si lo soy...</strong></h3>
			</div>
		</div>		
		<div class="col-sm-offset-2 col-sm-4 text-center">
			<span class="fa-stack fa-4x">
				<i class="fa fa-circle fa-stack-2x text-primary"></i>
				<i class="fa fa-stethoscope fa-stack-1x fa-inverse"></i>
			</span>
			<h4 class="service-heading text-center">Síntomas</h4>
			<p></p>
			<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>									
			
		</div>
		<div class="col-sm-4 text-center">				
			<span class="fa-stack fa-4x">
				<i class="fa fa-circle fa-stack-2x text-primary"></i>
				<i class="fa fa-user-md fa-stack-1x fa-inverse"></i>
			</span>					
			<h4 class="service-heading">Diagnóstico</h4>
			<p></p>
			<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>																	
		</div>	
		<div class="row text-center">
			<div class="col-md-offset-4 col-md-4">
					<a class="btn btn-xl" style="margin-top:25px" href="{{ route('informacion.index')}}" >Cuéntame más</a>
			</div>
		</div>
	</div>
</section>
@endsection

@section('guia')
<section id="guia" class="bg-light-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">¿Dónde Puedo Comer?</h2>
				<h3 class="section-subheading text-muted"><strong>¿No sabes dónde comer? Aquí te dejamos nuestra guía</strong></h3>
			</div>
		</div>
		<div class="col-md-offset-4 col-md-4 text-center">					
			<span class="fa-stack fa-4x">
				<i class="fa fa-circle fa-stack-2x text-primary"></i>
				<i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
			</span>
			<h4 class="service-heading">Guía Libre de Gluten</h4>
			<p class="text-justify">En esta guía te dejamos nuestra mejor recopilación de los lugares donde puesdes ir a comer sin preocuparte. Estos restaurantes se preocupan y cuidan de nosotros.</p>
			<a href="{{ route('guia.index')}}" class="btn btn-xl" style="margin-top:25px" target="_blank">Ir a la guía</a>
		</div>
	</div>
</section>
@endsection

	