<?php
include "conexion.inc.php";

session_start();
$usuario = $_SESSION["usuario"];
$rol = $_SESSION["rol"];

$sql = "select * from flujotramite xft, flujoproceso xfp ";

if ($rol == "Cliente") {
  $sql .= " where xft.usuario = '" . $usuario . "' and xft.fechafin is null";
  $sql .= " and xft.proceso = xfp.proceso and xft.flujo = xfp.flujo ";
  $sql .= " and xfp.rol ='" . $rol . "' ORDER BY FechaInicio";
} else {
  $sql .= " where xft.usuario <> '" . $usuario . "' and xft.fechafin is null";
  $sql .= " and xft.proceso = xfp.proceso and xft.flujo = xfp.flujo ";
  $sql .= " and xfp.Rol = '" . $rol . "' ORDER BY FechaInicio";
}

/*
$sql = "select * from flujotramite ";
if ($rol == "Estudiante") {
  $sql .= "where usuario='" . $usuario . "' and fechafin is null";
} elseif ($rol == "Prefacultativo") {
  $sql .= "where usuario<>'" . $usuario . "' and fechafin is null";
  $sql .= " and (Proceso = 'P3' and Flujo = 'F1')";
} elseif ($rol == "Kardex") {
  $sql .= "where usuario<>'" . $usuario . "' and fechafin is null";
  $sql .= " and ((Proceso <> 'P3' and Flujo = 'F1') ";
  $sql .= " or (Proceso <> 'P6' and Flujo = 'F2') )";
} elseif ($rol == "Direccion") {
  $sql .= "where usuario<>'" . $usuario . "' and fechafin is null";
  $sql .= " and (Proceso = 'P6' and Flujo = 'F2')";
}

*/

$resultado = mysqli_query($con, $sql);
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

<body style="background-color:#9FA8DA!important;">
  <div class="w-100 bg-dark mb-5">
    <center>
      <h1 class="text-white fs-1 p-5"> Bienvenido: <span class="text-primary text-uppercase fw-bold"><?php echo $usuario; ?> </span></h1>
      <hr>
    </center>
  </div>

  <div class="container">
    <div class="card">
      <div class="card-header text-white" style="background-color:#052453!important;">
        <center>
          <h1 class="p-3 mt-3 fw-bold">Seguimiento Tramite</h1>
          <hr>
        </center>
      </div>
      <div class="card-body p-0">

        <table class="table table-secondary table-striped mb-0">
          <tr>
            <td class="fw-bold">Flujo</td>
            <td class="fw-bold">Proceso</td>
            <td class="fw-bold">Nro.tramite</td>
            <td class="fw-bold">Fecha inicial</td>
            <td class="fw-bold">Fecha final</td>
            <td class="fw-bold">Usuario</td>
            <td class="fw-bold">Acción</td>
          </tr>
          <?php
          if ($resultado->num_rows < 1) {
          ?>
            <tr>
              <td class="text-center text-danger fs-4 fw-bold" colspan="7">Sin Tramites!</td>
            </tr>
          <?php
          }
          while ($fila = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>" . $fila["Flujo"] . "</td>";
            echo "<td>" . $fila["Proceso"] . "</td>";
            echo "<td>" . $fila["Nro_tramite"] . "</td>";
            echo "<td>" . $fila["FechaInicio"] . "</td>";
            echo "<td>" . $fila["FechaFin"] . "</td>";
            echo "<td>" . $fila["Usuario"] . "</td>";
            echo "<td><a class='btn btn-dark' href='flujo.php?flujo=" . $fila["Flujo"] . "&proceso=" . $fila["Proceso"] . "&nro_tramite=" . $fila["Nro_tramite"] . "&usuario=" . $fila["Usuario"] . "'>Ir</td>";
            echo "</tr>";
          }
          ?>
        </table>
      </div>

      <div class="card text-end">
        <div class="card-body">
          <div class="d-flex justify-content-around">
          <?php
          if ($rol == "Cliente") {
          ?>
            <div class="dropdown">
              <a class="btn btn-dark dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Nuevo Tramite
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="nuevoTramite.php?flujo=F1">Apertura de cuenta corriente</a></li>
                <li><a class="dropdown-item" href="nuevoTramite.php?flujo=F2">Deposito Bancario</a></li>
                <li><a class="dropdown-item" href="nuevoTramite.php?flujo=F3">Prestamo Bancario</a></li>
              </ul>
            </div>
          <?php
          }
          ?>

          <a href="logout.php" class="btn btn-warning fw-bold">Cerrar Sesión</a>
        </div>
        </div>
      </div>
    </div>

  </div>



  <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>