<?php
session_start();
$usuario = $_SESSION["usuario"];
$flujo = $_GET["flujo"];
$proceso = $_GET["proceso"];
$nro_tramite = $_GET["nro_tramite"];
$usuario2 = $_GET["usuario"];

include "conexion.inc.php";
$sql = "select * from flujoproceso ";
$sql .= "where flujo='" . $flujo . "' and ";
$sql .= "proceso='" . $proceso . "'";
$resultado = mysqli_query($con, $sql);
$fila = mysqli_fetch_array($resultado);
$pantalla = $fila["Pantalla"];
$tipo = $fila["Tipo"];
$rol = $fila["Rol"];
include $pantalla . ".datos.inc.php";

$sql = "select count(*) as cantidad from flujotramite ";
$sql .= "where flujo='" . $flujo . "' and ";
$sql .= "proceso='" . $proceso . "' and ";
$sql .= "nro_tramite='" . $nro_tramite . "'";
$resultado2 = mysqli_query($con, $sql);
$fila2 = mysqli_fetch_array($resultado2);
$cantidad = $fila2["cantidad"];
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tramites</title>
	<link href="./css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>

	<form method="GET" action="motor.php">
		<center>
			<?php

				//include $pantalla . ".inc.php";
			?>
			<input type="hidden" value="<?php echo $pantalla; ?>" name="pantalla" />
			<input type="hidden" value="<?php echo $flujo; ?>" name="flujo" />
			<input type="hidden" value="<?php echo $proceso; ?>" name="proceso" />
			<input type="hidden" value="<?php echo $tipo; ?>" name="tipo" />
			<input type="hidden" value="<?php echo $nro_tramite; ?>" name="nro_tramite" />
			<input type="hidden" value="<?php echo $usuario2; ?>" name="usuario" />
			<?php	
				
			if ($rol == $_SESSION["rol"]) {

				include $pantalla . ".inc.php";
				if ($tipo == "C") { ?>
					<input type="submit" class="btn btn-danger mt-4" value="No" name="No" />
					<input type="submit" class="btn btn-success mt-4" value="Si" name="Si" />
				<?php } else if ($tipo == "F") { ?>
					<input type="submit" class="btn btn-secondary mt-4" value="Anterior" disabled="disabled" name="Anterior" />
					<input type="submit" class="btn btn-danger mt-4" value="Siguiente" name="SiguienteF" />
				<?php } else {
				?>
					<?php
					if ($cantidad < 1) {
					?>
						<input type="submit" class="btn btn-secondary mt-4" value="Anterior" name="Anterior" />
					<?php
					} else {
					?>
						<input type="submit" class="btn btn-secondary mt-4" value="Anterior" disabled="disabled" name="Anterior" />
					<?php
					}
					?>
					<input type="submit" class="btn btn-danger mt-4" value="Siguiente" name="Siguiente" />
					

				<?php
				}
			} else {
				?>
				<div class="vh-100 d-flex align-items-center justify-content-center flex-column">
					
				<div class="alert alert-danger" role="alert">
					<img src="./img/mal.png" class="w-25 mb-3"/>
					<p class="fs-4 fw-bold">Usted no cuenta con los permisos necesarios!!</p>
					<h2>Pantalla Siguiente: <span class="text-dark fw-bold"><?php echo $pantalla;?> </span></h2>
					<h3>Rol Necesario: <span class="text-dark fw-bold"><?php echo $rol;?></span></h3>
				</div>
			<?php
			}
			echo "<br>";
			?>
			
			<input type="submit" class="btn btn-dark mt-4" value="Ir a Inicio" name="inicio" /><div>
		</center>

	</form>


</body>

</html>