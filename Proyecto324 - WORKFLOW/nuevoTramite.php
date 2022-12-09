<?php

    session_start();
 
    include "conexion.inc.php";
    $flujo = $_GET["flujo"];
    $usuario = $_SESSION["usuario"];
    $fechaActual = date('y/m/d h:i');


    $sql5 = "select DISTINCT nro_tramite from flujotramite ORDER BY nro_tramite DESC";
    $resultado = mysqli_query($con, $sql5);
    if ($resultado->num_rows < 1) {
        $nro = 1000;
    }
    else{
        $fila = mysqli_fetch_array($resultado);
        $nro = $fila["nro_tramite"] + 1;
    }


	$sql2 = "INSERT INTO flujotramite(flujo, proceso, nro_tramite, fechaInicio, fechaFin, usuario) ";
	$sql2.="values('".$flujo."','P1',' ";
	$sql2.=$nro."','".$fechaActual."', NULL, '".$usuario."')";
	mysqli_query($con, $sql2);

	header("Location: bentrada.php");
?>