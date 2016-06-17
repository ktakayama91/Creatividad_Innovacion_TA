@extends('layouts.guia')

@section('content')
	<!-- Header -->
	<header>
		<div class="container">
			<div class="intro-text">
				<div class="intro-heading">Perú Sin Glúten</div>
				<div class="intro-lead-in">Guía de Restaurantes Libres de Glúten</div>
			</div>
		</div>
	</header>
@endsection

@section('nearme')
<section id="nearme" class="bg-light-gray">
	
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">Cerca de mí</h2>
				<h3 class="section-subheading text-muted"><strong>Restaurantes cerca de tu locación actual</strong></h3>
			</div>
		</div>
	</div>
	
	<div id="map"></div>	
	
</section>
@endsection

@section('search')
<section id="search">
	
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">Gúia de Restaurantes</h2>
				<h3 class="section-subheading text-muted"><strong>Busca tu Restaurante Favorito Libre de Glúten</strong></h3>
			</div>
		</div>
	</div>

	<div class="container">
    	<div class="box">
			<div class="box-header">
              <h3 class="box-title"></h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Restaurante</th>
                    <th>Categoría</th>
                    <th>Distrito</th>                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="{{ route('restaurante.index') }}">Quinoa</a></td>
                    <td>VEGETARIANA - VEGANA - RAW</td>
                    <td>San Isidro</td>                   
                  </tr>
                  <tr>
                    <td>Cafe Fit</td>
                    <td>ORGÁNICO - SALUDABLE</td>
                    <td>Surco</td>                 
                  </tr>
                  <tr>
                    <td>Home Made</td>
                    <td>NATURAL - CASERA</td>
                    <td>Miraflores</td>                 
                  </tr>
                  <tr>
                    <td>Oliva y Tomato</td>
                    <td>NATURALES - RAW- VEGETARIANA</td>
                    <td>Online</td>                 
                  </tr>
                  <tr>
                    <td>Mezzaluna</td>
                    <td>SALUDABLE - NATURAL</td>
                    <td>Miraflores</td>                 
                  </tr>
                  <tr>
                    <td>Mandala Juice Bar</td>
                    <td>NATURAL - SALUDABLE</td>
                    <td>Miraflores</td>                 
                  </tr>
                  <tr>
                    <td>El Jardín de Jazmín</td>
                    <td>SALUDABLE - ORGÁNICO</td>
                    <td>Miraflores</td>                 
                  </tr>
                  <tr>
                    <td>Ino</td>
                    <td>NATURAL - ORGÁNICO</td>
                    <td>San Isidro</td>                 
                  </tr>
                  <tr>
                    <td>Qumara</td>
                    <td>NATURAL - SALUDABLE</td>
                    <td>San Isidro</td>                 
                  </tr>
                  <tr>
                    <td>VaBien</td>
                    <td>SALUDABLE - NATURAL</td>
                    <td>La Molina</td>                 
                  </tr>
                  <tr>
                    <td>La Balanza Cantina Comedor</td>
                    <td>ORGÁNICO - NATURAL</td>
                    <td>San Isidro</td>                 
                  </tr>
                  <tr>
                    <td>Green Is Better</td>
                    <td>RAW - NATURAL</td>
                    <td>San Isidro</td>                 
                  </tr>
                  <tr>
                    <td>Veggie Pizza</td>
                    <td>VEGETARIANA</td>
                    <td>Miraflores</td>                 
                  </tr> 
                  <tr>
                    <td>Design Your Salad</td>
                    <td>NATURAL - SALUDABLE</td>
                    <td>San Isidro</td>                 
                  </tr> 
                  <tr>
                    <td>Sanurya Fastgood</td>
                    <td>SALUDABLE</td>
                    <td>Miraflores</td>                 
                  </tr> 
                  <tr>
                    <td>Modo Orgánico</td>
                    <td>SALUDABLE - VEGANO - RAW</td>
                    <td>Barranco</td>                 
                  </tr>                 
                </tbody>
                <tfoot>
                  <tr>
                    <th>Restaurante</th>
                    <th>Categoria</th>
                    <th>Distrito</th>
                  </tr>
                </tfoot>
              </table>
        	</div><!-- /.box-body -->
    	</div><!-- /.box -->
	</div>
		
</section>
@endsection