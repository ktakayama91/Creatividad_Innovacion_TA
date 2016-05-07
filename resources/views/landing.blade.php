@extends('layouts.master')

@section('gluten')
	<section id="gluten" class="bg-light-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">¿Qué es el Glúten?</h2>
					<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-4">					
					<span class="fa-stack fa-4x">
						<i class="fa fa-circle fa-stack-2x text-primary"></i>
						<i class="fa fa-question fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">¿?</h4>
					<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
				</div>
				<div class="col-md-4">
					<span class="fa-stack fa-4x">
						<i class="fa fa-circle fa-stack-2x text-primary"></i>
						<i class="fa fa-cutlery fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">Food</h4>
					<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
				</div>
				<div class="col-md-4">
					<span class="fa-stack fa-4x">
						<i class="fa fa-circle fa-stack-2x text-primary"></i>
						<i class="fa fa-heart fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">Health</h4>
					<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
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
				<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="team-member">
					<img src="dist/img/team/1.jpg" class="img-responsive img-circle" alt="">
					<h4>Kay Garland</h4>
					<p class="text-muted">Lead Designer</p>
					<ul class="list-inline social-buttons">
						<li><a href="#"><i class="fa fa-twitter"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="team-member">
					<img src="dist/img/team/2.jpg" class="img-responsive img-circle" alt="">
					<h4>Larry Parker</h4>
					<p class="text-muted">Lead Marketer</p>
					<ul class="list-inline social-buttons">
						<li><a href="#"><i class="fa fa-twitter"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="team-member">
					<img src="dist/img/team/3.jpg" class="img-responsive img-circle" alt="">
					<h4>Diana Pertersen</h4>
					<p class="text-muted">Lead Developer</p>
					<ul class="list-inline social-buttons">
						<li><a href="#"><i class="fa fa-twitter"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
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
				<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
			</div>
		</div>
		<div class="col-md-offset-4 col-md-4 text-center">					
			<span class="fa-stack fa-4x">
				<i class="fa fa-circle fa-stack-2x text-primary"></i>
				<i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
			</span>
			<h4 class="service-heading">Guía Libre de Gluten</h4>
			<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
			<a href="{{ route('guia.index')}}" class="btn btn-xl">Ir a la guía</a>
		</div>
	</div>
</section>
@endsection

	