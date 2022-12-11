<?php 
    $sql="SELECT * FROM cliente ";
    $sql.="WHERE usuario = '".$usuario2."'";
    $resultadofi=mysqli_query($con, $sql);
    $filafi=mysqli_fetch_array($resultadofi);
    $usuarioc = $filafi["usuario"]; 
    $ci=$filafi["ci"];
    $nombreCompleto=$filafi["nombreCompleto"];



?>