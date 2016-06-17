<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Perú Sin Glúten | GUÍA</title>

	<!-- Bootstrap Core CSS -->
	<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="{{ asset('dist/css/agency.css') }}" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="{{ asset('dist/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

	<!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('dist/datatables/dataTables.bootstrap.css') }}">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<style>
      #map {
        width: 95%;
        height: 500px;
        margin-left: auto;
  		margin-right: auto;
  		border-radius: 10px;
    	border: 5px ridge #C0C0C0;
    	
    
      }
    </style>
</head>

<body id="page-top" class="index">

	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand page-scroll" href="#page-top">Perú Sin Glúten</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-navbar-collapse">
				<ul class="nav navbar-nav navbar-right">					
					<li>
						<a class="page-scroll" href="{{ route('home.index') }}">HOME</a>
					</li>
					<li>
						<a class="page-scroll" href="#">VOLVER ARRIBA <span class="glyphicon glyphicon-menu-up"></span></a>
					</li>					
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	
	@yield('content')

	@yield('nearme')

	@yield('search')

	@include('layouts.footer')

	<!-- jQuery -->
	<script src="{{ asset('dist/js/jquery.js') }}"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

	<!-- Plugin JavaScript -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="{{ asset('dist/js/classie.js') }}"></script>
	<script src="{{ asset('dist/js/cbpAnimatedHeader.js') }}"></script>

	<!-- Contact Form JavaScript -->
	<script src="{{ asset('dist/js/jqBootstrapValidation.js') }}"></script>
	<script src="{{ asset('dist/js/contact_me.js') }}"></script>

	<!-- Custom Theme JavaScript -->
	<script src="{{ asset('dist/js/agency.js') }}"></script>

	<!-- Google Maps API -->
	<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
	<script src="{{ asset('dist/js/map.js') }}"></script>

	<!-- DataTables -->
    <script src="{{ asset('dist/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dist/datatables/dataTables.bootstrap.min.js') }}"></script>

    <script>
      $(function () {              	
        $('#example1').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
        });
      });
    </script>

</body>

</html>
