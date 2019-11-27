@extends('layouts.app')

@section('title','index')

@section('style','index.css')
@section('content')
	<header role="banner" id="fh5co-header">
			<div class="container">
				<!-- <div class="row"> -->
			    <nav class="navbar navbar-default">
		        <div class="navbar-header">
		        	<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		         <a class="navbar-brand" href="index.html">ChaskiGas</a> 
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
		          <ul class="nav navbar-nav navbar-right">
		            <li class="active"><a href="#" data-nav-section="home"><span>Inicio</span></a></li>
		            <li><a href="#" data-nav-section="services"><span>Caracteristicas</span></a></li>
		            <li><a href="#" data-nav-section="about"><span>Integrantes</span></a></li>
		           	<li>
		           		<form method="POST" action="{{route('logout')}}">
		           			@csrf
		           			<input id="cerrar" class="cerrar" type="submit" value="Cerrar" >
		           		</form>

		           	</li>
		           
		          </ul>
		        </div>
			    </nav>
			  <!-- </div> -->
		  </div>
	</header>

	<section id="fh5co-home" data-section="home" style="background-image: url(images/full_image_2.jpeg);" data-stellar-background-ratio="0.5">
		<div class="gradient"></div>
		<div class="container">
			<div class="text-wrap">
				<div class="text-inner">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h1 class="to-animate">Bienvenido a la pagina de administracion y manejo</h1>
							<h2 class="to-animate">Esta pagina es solo para administrador o gerentes de los diferentes establecimientos,para usuarios visitar <a href="http://creativecommons.org/licenses/by/3.0/" target="_blank">www.chaskigas.com</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slant"></div>
	</section>

	<section id="fh5co-intro">
		<div class="container">
			<div class="row row-bottom-padded-lg">
				<div class="fh5co-block to-animate" style="background-image: url(images/img_7.jpg);">
					<div class="overlay-darker"></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<i class="fh5co-intro-icon glyphicon glyphicon-list-alt"></i>
						<h2>Registro</h2>
						<p>Aqui podras registrar tus ventas realizadas a lo largo del dia , para que puedan ser administradas</p>
						<p><a href="Consola.jsp" class="btn btn-primary">Click aqui</a></p>
					</div>
				</div>
				<div class="fh5co-block to-animate" style="background-image: url(images/img_8.jpg);">
					<div class="overlay-darker"></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<i class="fh5co-intro-icon 	glyphicon glyphicon-sunglasses"></i>
						<h2>Revision</h2>
						<p>Aqui podras observar tus ventas o datos que ingresaste sobre tu ventay llevar un control respectivo</p>
						
						<p><a href="Consola.jsp" class="btn btn-primary">Click aqui</a></p>
					</div>
				</div>
				<div class="fh5co-block to-animate" style="background-image: url(images/img_10.jpg);">
					<div class="overlay-darker"></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<i class="fh5co-intro-icon glyphicon glyphicon-equalizer"></i>
						<h2>Consola</h2>
						<p>Esta seccion permite enviar comandos directamente a la base de datos,para que el profesor pueda hacer sus consultas respectivas</p>
						<p><a href="Consola.jsp" class="btn btn-primary">Click aqui</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="fh5co-services" data-section="services">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-left">
					<h2 class=" left-border to-animate">Caracteristicas</h2>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 fh5co-service to-animate">
					<i class="icon to-animate-2 glyphicon glyphicon-earphone"></i>
					<h3>Entregas rapidas con una sola llamada</h3>
					<p>Ofrecemos un servicio de entrega rapida,de una manera facil y practica a tan solo una llamda desde su casa.Garantizamos que su pedido se le entregara en menos de 
					30 minutos</p>
				</div>
				<div class="col-md-6 col-sm-6 fh5co-service to-animate">
					<i class="icon to-animate-2 glyphicon glyphicon-piggy-bank"></i>
					<h3>Precios comodos</h3>
					<p>Productos aprecios accesibles para todos,usted solo paragara por el contenido y no por el envase, desde 30 soles.Tambien tenemos una variedad de productos que usted podra adquirir si lo desea</p>
				</div>

				<div class="clearfix visible-sm-block"></div>

				<div class="col-md-6 col-sm-6 fh5co-service to-animate">
					<i class="icon to-animate-2 glyphicon glyphicon-ok-circle"></i>
					<h3>Productos de calidad</h3>
					<p>Nuestros balones de gasa tienen todos sus registros y papeles en orden, en la parte inferior del proucto para que usted pueda comprobarlo en cualquier momento</p>
				</div>
				<div class="col-md-6 col-sm-6 fh5co-service to-animate">
					<i class="icon to-animate-2 glyphicon glyphicon-warning-sign"></i>
					<h3>Seguridad y garantia de balones</h3>
					<p>Nuestros balones poseen todos lo certificados debidos para garantizar la proteccion y seguridad de nuestras valvulas.</p>
				</div>
				
			</div>
		</div>
	</section>
	
	<section id="fh5co-about" data-section="about">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Integrantes</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
							<h3>Integrantes del equipo,que contribuyeron a la realizacion del proyecto final.</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="fh5co-person text-center to-animate">
						<figure><img src="images/img_9.jpg" alt="Image"></figure>
						<h3>Andy Ñaca</h3>
						<span class="fh5co-position">Web Designer</span>
						<p>Explico funcionamiento y aplicacion de la base de datos en nuestra pagina web.Asimismo mostro unos ejemplos de usos</p>
						<ul class="social social-circle">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="fh5co-person text-center to-animate">
						<figure><img src="images/img_11.jpg"></figure>
						<h3>Eduardo Sanchez</h3>
						<span class="fh5co-position">Web Developer</span>
						<p>Explico modelo conceptual, dejando clara la intencion,funcion y problema que resolvera nuestra base de datos</p>
						<ul class="social social-circle">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="fh5co-person text-center to-animate">
						<figure><img src="images/img_12.jpg" alt="Image"></figure>
						<h3>Luis Villanueva</h3>
						<span class="fh5co-position">Web Designer</span>
						<p>Mostro el modelo logico y fisico, con nuestra base de datos ya finalizada.</p>
						<ul class="social social-circle">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="fh5co-person text-center to-animate">
						<figure><img src="images/img_13.jpg"></figure>
						<h3>Renzo Vicente</h3>
						<span class="fh5co-position">Web Developer</span>
						<p>Explico modelo conceptual, dejando clara la intencion,funcion y problema que resolvera nuestra base de datos</p>
						<ul class="social social-circle">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer" role="contentinfo">
		<a href="#" class="gotop js-gotop">To<i class="icon-arrow-up2">Top</i></a>
		<div class="container">
			<div class="">
				<div class="col-md-12 text-center">
					<p>&copy; HTML5. All Rights Reserved. <br>Created by <a href="http://freehtml5.co/" target="_blank">AndyG</a></p>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="social social-circle">
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-youtube"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
@endsection()
