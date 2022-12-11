<?php

    $usuarioc = $_GET["usuarioc"];
    $ci=$_GET["ci"];
    $nombreCompleto=$_GET["nombreCompleto"];
    $direccion=$_GET["direccion"];
    $correo=$_GET["correo"];
    $telefono=$_GET["telefono"];
    $fechaNac = $_GET["fechaNac"];

    $sql5="UPDATE cliente ";
    $sql5.="SET nombreCompleto='".$nombreCompleto."', ";
    $sql5.= "ci='".$ci."', ";
    $sql5.= "direccion='".$direccion."', ";
    $sql5.= "fecha_nacimiento='".$fechaNac."', ";
    $sql5.= "correo='".$correo."', ";
    $sql5.= "telefono='".$telefono."' ";
    $sql5.="WHERE usuario='".$usuarioc."'";
    $resultadofi=mysqli_query($con, $sql5);

?>