<!DOCTYPE html>
<html>
		<head>
			<meta charset="utf-8"> <!-- para transformar caracteres -->
			<meta name="description" content="Coca cola es la bebida y bla bla bla"> <!-- resumen o descripcion -->
			<meta name="keywords" content="bebida, gaseosa, cola"> <!-- palabras claves max: 10 -->
			<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- para disños responsivos -->

			<title>
				Inicio - Coca Cola
			</title>
			<link rel="shortcut icon" href="img/favicon.png">
			<link rel="stylesheet" href="css/normalize.css"><!-- normalizacion css-->
			<!-- fuentes tipograficas -->
			<link rel = "preconnect" href = "https://fonts.gstatic.com">
			<link href = "https://fonts.googleapis.com/css2? family = Roboto: wght @ 100 & display = swap" rel = "hoja de estilo">

			<link rel="stylesheet" href="style.css">
			<script src="https://kit.fontawesome.com/d4ecf37fc8.js" crossorigin="anonymous"></script>


		</head>
		<body>
			<header>
				<div class="container">
					<a href="index.php">
						<img src="img/logo.svg" class="logo" width="200">
					</a>
					<nav>
						<a href="#inicio">Inicio</a>
						<a href="#nosotros">Nosotros</a>
						<a href="#servicios">Servicios</a>
						<a href="#galeria">Galeria</a>
						<a href="#contactenos">Contactenos</a>
					</nav>
					<a href="" class="hamb"><i class="fas fa-bars"></i></a>
				</div>
			</header>
			<main>
				<section id="inicio">
				<img src="img/bannerprincipal.jpg">
				<div class="bloque-inicio">
					<h1>Bienvenidos a Coca Cola</h1>
					<p>Lorem ipsum dolor sit amet, consectetur
					adipiscing elit.
					</p>
					<a href="#nosotros" class="boton boton-rojo">Ver más</a>
				</div>					
				</section>

				<section id="nosotros" class="seccion">
					<div class="container">
						<p>Nam accumsan tellus tortor, at aliquet est sodales vitae. Praesent posuere nunc eget odio dapibus, sed cursus mauris tincidunt. Donec accumsan arcu et urna eleifend sodales. Sed at neque non leo tincidunt semper. In ligula enim, rutrum sit amet Lorem eu, congue dapibus nisi.</p>
					</div>
					
				</section>
				<section id="servicios" class="seccion">
					<div class="container">
						<div class="row">
							<div class="columna columna-33 columna-mobile-100">
								<div class="bloque-servicio">
									<div class="bloque-img-servicio cuadrado-perfecto">
										<img src="img/servicio1.jpg">
									</div>
									<div class="bloque-contenido-servicio">
										<h3>Servicio 1</h3>
										<p>Nam accumsan tellus tortor, at aliquet est sodales vitae. Praesent posuere nunc eget odio dapibus, sed cursus mauris tincidunt.</p>
										<a href="#" class="boton boton-blanco">Ver más</a>
									</div>
								</div>
							</div>
							<div class="columna columna-33 columna-mobile-100">
								<div class="bloque-servicio">
									<div class="bloque-img-servicio cuadrado-perfecto">
										<img src="img/servicio2.jpg">
									</div>
									<div class="bloque-contenido-servicio">
										<h3>Servicio 2</h3>
										<p>Nam accumsan tellus tortor, at aliquet est sodales vitae. Praesent posuere nunc eget odio dapibus, sed cursus mauris tincidunt.</p>
										<a href="#" class="boton boton-blanco">Ver más</a>
									</div>
								</div>
							</div>
							<div class="columna columna-33 columna-mobile-100">
								<div class="bloque-servicio">
									<div class="bloque-img-servicio cuadrado-perfecto">
										<img src="img/servicio3.jpg">
									</div>
									<div class="bloque-contenido-servicio">
										<h3>Servicio 3</h3>
										<p>Nam accumsan tellus tortor, at aliquet est sodales vitae. Praesent posuere nunc eget odio dapibus, sed cursus mauris tincidunt.</p>
										<a href="#" class="boton boton-blanco">Ver más</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section id="galeria">
				<div class="container-fluid">
					<div class="row">
						<div class=" columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/coca-cola-agua-.jpg">
								<h4>Imagen1</h4>
							</div>
						</div>
						<div class=" columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/estadio.jpg">
								<h4>Imagen2</h4>
							</div>
						</div>
						<div class=" columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/Cocacola.jpg">
								<h4>Imagen3</h4>
							</div>
						</div>
						<div class=" columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/coca-1x1.jpg">
								<h4>Imagen4</h4>
							</div>
						</div>
						<div class=" columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/2547068.jpeg">
								<h4>Imagen5</h4>
							</div>
						</div>
						<div class=" columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/estadio-da.jpg">
								<h4>Imagen6</h4>
							</div>
						</div>
					</div>
				</div>					
				</section>
				<!-- slideshow -->
				<section id="galeriaA" class="seccion">
					<h1>Galeria con slideshow</h1>
				<div id="slideshow">
						<div class="cuadrado-perfecto">
								<img src="img/coca-cola-agua-.jpg">
						</div>
						<div class="cuadrado-perfecto">
								<img src="img/estadio.jpg">
						</div>
						<div class="cuadrado-perfecto">
								<img src="img/Cocacola.jpg">
						</div>
				</div>				
				</section>
				<!-- fin -->

				<section id="contactenos" class="seccion">
					<!-- iframe de mapa -->
					<iframe width="520" height="400" frameborder="0"src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=milton%20reyes%20Riobamba+(Pagina%20de%20prueba)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> 
					<!-- fin iframe mapa -->
					<div class="container-fluid">
						<div class="row">
							<div class="columna columna-33 columna-mobile-100 empujar-66 empujar-mobile-0 sinpadding-mobile">
								<form action="index.php" method="post">
									<div class="form-block">
										<!-- <label>Contactenos</label> -->
										<h1>Contactenos</h1>
									</div>
									<div class="form-block">
										<input type="text" name="nombre" class="form-control" placeholder="Nombre">
									</div>
									<div class="form-block">
										<input type="email" name="email" class="form-control" placeholder="Correo">
									</div>
									<div class="form-block">
										<textarea name="mensaje" placeholder="Mensaje"></textarea>
									</div>
									<div class="form-block bloque-ultimo">
										<input type="submit" class="boton boton-negro" value="Enviar">
										<!-- validar -->
										<?php
										if($_SERVER["REQUEST_METHOD"] == "POST")
										{
											$nombre = $_POST["nombre"];
											$email = $_POST["email"];
											$mensaje = $_POST["mensaje"];
											if(isset($nombre)){
											if(isset($email)){
											if(isset($mensaje)){

											$para = "marlonmosquera2005@gmail.com";
											$asunto = "prueba html";
											$cuerpo = $nombre."\n".$email."\n".$mensaje;
											$adicional = "From : noreply@marlon.com";

											mail($para, $asunto, $cuerpo, $adicional);
										?>
											<p>envío exitoso</p>
										<?php
										}
										}

										}
										}  
										?>
										<!--  -->
									</div>
								</form>
							</div>
						</div>
					</div>
					
				</section>
			</main>
			<footer>
				<div class="container">
					<div class="row">
						<div class="columna columna-25 columna-mobile-100">
							<img src="img/logo-blanco.png" class="logo-footer">
							<p>Nam accumsan tellus tortor, at aliquet est sodales vitae. Praesent posuere nunc eget odio dapibus, sed cursus mauris tincidunt.</p>
						</div>
						<div class="columna columna-25 columna-mobile-100">
							<h3>
								Temas relacionados
							</h3>
							<ul> <!-- inicio lista-->
								<li><a href="#">Compañia</a></li>
								<li><a href="#">Transporte</a></li>
								<li><a href="#">Proovedores</a></li>
							</ul> <!-- fin lista-->
						</div>
						<div class="columna columna-25 columna-mobile-100">
							<h3>
								Datos de contacto
							</h3>
							<ul> <!-- inicio lista-->
								<li>marlonmosquera2005@gmail.com</li>
								<li>0990099486</li>
								<li>Espoch - Riobamba<br> Ecuador</li>
							</ul> <!-- fin lista-->
						</div>
						<div class="columna columna-25 columna-mobile-100">
							<h3>
								Redes sociales
							</h3>
							<ul class="redes"> <!-- inicio lista-->
								<li>
									<a href="https://www.facebook.com/yagami2012/">
										<i class="fab fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="https://twitter.com/yagami_2015">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="https://www.tiktok.com/@marlonalejandromo7?lang=es">
										<i class="fab fa-tiktok"></i>
									</a>
								</li>
							</ul> <!-- fin lista-->
						</div>
					</div>
				</div>
				<div class="barra-footer">
					&copy; Derechos Reservados - 2021
				</div>
			</footer>
			<script src="js/jquery.js"></script>
			<script src="js/funciones.js"></script>
		</body>
</html>