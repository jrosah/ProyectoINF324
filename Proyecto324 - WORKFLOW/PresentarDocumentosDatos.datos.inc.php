<?php 
    $sql="SELECT * FROM cliente ";
    $sql.="WHERE usuario = '".$usuario2."'";
    $resultadofi=mysqli_query($con, $sql);
    $filafi=mysqli_fetch_array($resultadofi);
    $usuarioc = $filafi["usuario"]; 
    $ci=$filafi["ci"];
    $fechaNac=$filafi["fecha_nacimiento"];
    $nombreCompleto=$filafi["nombreCompleto"];
    $direccion=$filafi["direccion"];
    $correo=$filafi["correo"];
    $telefono=$filafi["telefono"];



?>