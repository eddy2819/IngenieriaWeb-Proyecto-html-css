<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Happy Pets</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="icon" href="../images/logo.png" sizes="32x32" />
    <link rel="icon" href="../images/logo.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../images/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
<div class="contenedor">
	<header class="cabeceraPrincipal">
		<section class="logotipo"><img src="../images/logotipoPet.png"></section>
		<nav class="menuPrincipal">
			<a href="../">Inicio</a>
			<a href="servicios.php">Servicios</a>
			<a href="#">Productos</a>
			<a href="adopcion.php">Adopción</a>
			<a href="#">Contactos</a>
		</nav>
	</header>
	<main>
		<h2>Formulario de Adopción</h2>
		<form method="post" action="procesar.php">
            <div class="grupoinput">
                <label for="nombres">Nombres <samp class="rojo">*</samp></label>
                <input type="text" name="nombres" placeholder="Ingrese sus nombres" required>
            </div>
            <div class="grupoinput">
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" placeholder="Ingrese sus Apellidos">
            </div>
            <div class="grupoinput">
                <label for="correo">Correo</label>
                <input type="text" name="correo" placeholder="Ingrese su Correo">
            </div>
            <div class="grupoinput">
                <label for="cedula">Cedula <samp class="rojo">*</samp></label>
                <input type="number" name="cedula" placeholder="Ingrese su cedula">
            </div>
            <div class="grupoinput">
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" placeholder="Ingrese sus nombres">
            </div>
            <div class="grupoinput">
                <label for="fechanacimiento">Fecha Nacimiento</label>
                <input type="date" id="fechanacimiento" name="fechanacimiento" placeholder="Ingrese su Fecha de Nacimiento">
            </div>
            <div class="grupoinput">
                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" placeholder="Ingrese sus Telefono">
            </div>
            <button type="submit" class="button ">Guardar Datos</button>
        </form>
	</main>
	<section class="sponsor">
		<h3>Sponsor</h3>
	</section>
	<footer class="piePagina">
		<section class="derechos">
			<h6>Derechos Reservados UTPL 2022</h6>
		</section>
		<nav class="redesSociales">
			<a href=""><i class="fa-brands fa-facebook"></i></a>
			<a href=""><i class="fa-brands fa-instagram"></i></a>
			<a href=""><i class="fa-brands fa-tiktok"></i></a>
		</nav>
	</footer>
</div>
</body>
</html>