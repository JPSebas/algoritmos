<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--  manejo y configuración del caché del equipo para esta página -->
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>

    <!-- "viewport"  permite tomar y configura la pantalla --> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ADSO SENA</title>

    <!--  Estableceun tiempo de transición (pausa)para actualizar la pantalla de inicio. Después de vencido el tiempo carga automáticamente la página referenciada.  -->
    <META HTTP-EQUIV="REFRESH" CONTENT="6;URL=homepage.php"> 

    <!--  Definiciones ícono favorito --- favicon.ico --->
    <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="./imagenes/icon/favicon.ico" type="image/x-icon"> 

    <link rel="apple-touch-icon" sizes="120x120" href="./imagenes/icon/apple-touch-icon.png">
    <link rel="manifest" href="./imagenes/icon/site.webmanifest">
    <link rel="mask-icon" href="./imagenes/icon/safari-pinned-tab.svg" color="#5bbad5">

    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="./css/estilos.css?n=0">
      
</head>
<body>
    <header id="header">
		<nav class="menu">
			<div class="logo-box">
				<a href="index.php">
					<img src="https://agenciapublicadeempleo.sena.edu.co/imgLayout/logos/Logosimbolo-SENA-PRINCIPAL.png" width="75px" height="75px" alt="acceso al home page Ejercicios programación ADSO">
				</a>
				<span class="btn-menu"><i class="fas fa-bars"></i></span>
			</div>

			<div class="list-container">
				<ul class="lists">
					<li><a href="index.php">Centro de Desarrollo Agroindustrial y Empresarial - C D A E</a></li>
				</ul>
			</div>
		</nav>

		<!-- Imagen Header -->
		<div class="img-header homebg">
			<div class="welcome">
				<h1 class="titulo">Ejercicios de repaso</h1>
				<h1 class="titulo">Estructuras básicas de programación</h1>
				<hr>
				<p>PROGRAMACIÓN EN PHP</p>
				<li style="list-style: none;"><a href="homepage.php" class="cta">Empieza</a></li> 

			</div>
		</div>

		<div class="skew-abajo"></div>
	</header>
	<br>
    <footer class="footer">
		<div class="contenedor contenedor-footer">
			<div class="footer-text">
				<p>&copy; A D S O - 20693143 | Todos los derechos reservados | 2023 </p>
			</div>
		</div>
	</footer>
</body>
</html>