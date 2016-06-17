@extends('layouts.restaurante')

@section('content')
	<!-- Header -->
	<header>
		<div class="container">
			<div class="intro-text">
				<div class="intro-heading">QUINOA</div>
				<div class="intro-lead-in">Av. Pardo y Aliaga 664, San Isidro</div>
				<h4 class="section-subheading">Lun. a Vie. 8am a 10pm | Sáb. y Dom. de 8am a 5pm</h4>
				<a href="https://www.facebook.com/Quinoacafe/?fref=nf" target="_blank">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x text-primary"></i>
						<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
					</span>
				</a>
			</div>
		</div>
	</header>
@endsection

@section('menu')
	<section id="menu" class="bg-light-gray">
		
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Menú</h2>
					<h3 class="section-subheading text-muted"><strong></strong></h3>
				</div>
			</div>

			<div class="wrapper">

				<div class="row">
					<!--  left menu row  -->
					<div class="col-md-6">
						<ul>
							<li>
								<div class="item_info">									
									<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
										<h3 class="item_name">Voluptate cillum fugiat.</h3>
									</a>
									<p class="item_desc">Cheese, tomato, mushrooms, onions.</p>
								</div>
								<h4 class="price">$50</h4>
								<span class="separator"></span>
							</li>
							<li>
								<div class="item_info">
									<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
										<h3 class="item_name">Metus varius laoreet.</h3>
									</a>
									<p class="item_desc">Chicken, mozzarella cheese, onions.</p>
								</div>
								<h4 class="price">$62</h4>
								<span class="separator"></span>
							</li>
							<li>
								<div class="item_info">
									<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
										<h3 class="item_name">Donec sodales magna.</h3>
									</a>	
									<p class="item_desc">Tuna, Sweetcorn, Cheese.</p>
								</div>
								<h4 class="price">$25</h4>
								<span class="separator"></span>
							</li>
							<li>
								<div class="item_info">
									<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
										<h3 class="item_name">Saugue velit cursus.</h3>
									</a>	
									<p class="item_desc">Pineapple, Minced Beef, Cheese.</p>
								</div>
								<h4 class="price">$30</h4>
								<span class="separator"></span>
							</li>
						</ul>
					</div>

					<!--  right menu row  -->
					<div class="col-md-6">
						<ul>
							<li>
								<div class="item_info">
									<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
										<h3 class="item_name">Arcu pede enim justo.</h3>
									</a>	
									<p class="item_desc">Tuna, Sweetcorn, Cheese.</p>
								</div>
								<h4 class="price">$45</h4>
								<span class="separator"></span>
							</li>
							<li>
								<div class="item_info">
									<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
										<h3 class="item_name">Cras dapibussemper nisi.</h3>
									</a>	
									<p class="item_desc">Pineapple, Minced Beef, Cheese.</p>
								</div>
								<h4 class="price">$32</h4>
								<span class="separator"></span>
							</li>
							<li>
								<div class="item_info">
									<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
										<h3 class="item_name">Quam semper libero.</h3>
									</a>	
									<p class="item_desc">Cheese, tomato, mushrooms, onions.</p>
								</div>
								<h4 class="price">$15</h4>
								<span class="separator"></span>
							</li>
							<li>
								<div class="item_info">
									<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
										<h3 class="item_name">Nam eget dui Etiam.</h3>
									</a>
									<p class="item_desc">Chicken, mozzarella cheese, onions.</p>
								</div>
								<h4 class="price">$35</h4>
								<span class="separator"></span>
							</li>
						</ul>
					</div>
				</div>			
			</div>
		</div>
	</section>

	<!-- Menu Modal -->
	<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
	    <div class="modal-content">
	        <div class="close-modal" data-dismiss="modal">
	            <div class="lr">
	                <div class="rl">
	                </div>
	            </div>
	        </div>
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-8 col-lg-offset-2">
	                    <div class="modal-body">
	                        <!-- Dish Details Go Here -->
	                        <h2>Dish Name</h2>
	                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
	                        <img class="img-responsive img-centered" src="dist/img/quinoa.jpg" alt="" style="border-radius: 10px;">
	                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
	                        <p>
	                            <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
	                        <ul class="list-inline">
	                            <li>Date: July 2014</li>
	                            <li>Client: Round Icons</li>
	                            <li>Category: Graphic Design</li>
	                        </ul>
	                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Volver al Menú</button>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection

@section('ubicanos')
<section id="ubicanos">

<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h2 class="section-heading">Ubícanos</h2>
			<h3 class="section-subheading text-muted"><strong>Aquí te dejamos la mejor ruta desde tu ubicación</strong></h3>
		</div>
	</div>
</div>

<div id="map"></div>	
	
</section>
@endsection