<?php

    $usuarioc = $_GET["usuarioc"];
    $ci=$_GET["ci"];
    $nombreCompleto=$_GET["nombreCompleto"];
    

    $sql5="UPDATE cliente ";
    $sql5.="SET nombreCompleto='".$nombreCompleto."', ";
    $sql5.= "ci='".$ci."' ";
    $sql5.="WHERE usuario='".$usuarioc."'";

    $resultadofi=mysqli_query($con, $sql5);

?>