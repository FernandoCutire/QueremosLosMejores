<?php
function encabezado()
{
?>
	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="plantilla/estilo.css">
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;1,300;1,400;1,500&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&family=Rowdies&display=swap" rel="stylesheet"> 		<link rel="shortcut icon" href="imagenes/logo.png">
		<title>Queremos los mejores</title>
	</head>

	<body>

		<div class="page__container">

			<header class="header">
			<!--
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
					<path fill="#94d1beff" fill-opacity="1" d="M0,256L20,218.7C40,181,80,107,120,90.7C160,75,200,117,240,122.7C280,128,320,96,360,106.7C400,117,440,171,480,186.7C520,203,560,181,600,160C640,139,680,117,720,106.7C760,96,800,96,840,122.7C880,149,920,203,960,197.3C1000,192,1040,128,1080,117.3C1120,107,1160,149,1200,170.7C1240,192,1280,192,1320,160C1360,128,1400,64,1420,32L1440,0L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z">
					</path>
				</svg>
				
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#94d1beff" fill-opacity="1" d="M0,288L24,266.7C48,245,96,203,144,181.3C192,160,240,160,288,144C336,128,384,96,432,85.3C480,75,528,85,576,112C624,139,672,181,720,181.3C768,181,816,139,864,138.7C912,139,960,181,1008,186.7C1056,192,1104,160,1152,122.7C1200,85,1248,43,1296,37.3C1344,32,1392,64,1416,80L1440,96L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>
				-->
				
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#94d1beff" fill-opacity="1" d="M0,288L24,245.3C48,203,96,117,144,112C192,107,240,181,288,192C336,203,384,149,432,154.7C480,160,528,224,576,213.3C624,203,672,117,720,101.3C768,85,816,139,864,160C912,181,960,171,1008,154.7C1056,139,1104,117,1152,112C1200,107,1248,117,1296,128C1344,139,1392,149,1416,154.7L1440,160L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>
				<div class="header__image">
					<a href="index.php"><img src="imagenes/logo.png" class="header__img"></a>
				</div>
			</header>

			<nav class="navigation__nav">
				<ul>
					<li><a href="index.php">Inicio</a></li>
					<li> <a href="prueba.php">Prueba</a></li>
					<li> <a href="blog.php">Sobre nosotros</a></li>
					<li><a href="documentacion.php">Documentación</a></li>
				</ul>

			</nav>



		<?php

	}
	function pie()
	{ ?>
		</div>
		<div class="footer margin-top-medium">
			<footer>
				Desarrollo Orientado a Objetos, Facultad de Ingenieria de Sistemas Computacionales.
				<br>Universidad Tecnológica de Panamá <br>
				<a href="https://github.com/FernandoC1217">Fernando Cutire</a>, <a href="https://github.com/Hellynger">Hellynger St Rose</a>, <a href="https://github.com/RafaSPlayer">Rafael Sáenz</a>, <a href="https://github.com/carloslambrano00">Carlos Lambraño</a></p>
			</footer>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
				<path fill="#fff" fill-opacity="1" d="M0,128L48,112C96,96,192,64,288,90.7C384,117,480,203,576,240C672,277,768,267,864,240C960,213,1056,171,1152,165.3C1248,160,1344,192,1392,208L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
			</svg>
		</div>
	</body>

	</html>
<?php  }  ?>