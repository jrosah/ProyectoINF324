  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tramites</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet" />
    <!-- <link href="./css/style.css" rel="stylesheet" /> -->
</head>

<body class="container bg-light">
    <!-- <div class="container">
        <h4> Usuario: <?php echo $usuario; ?> </h4>
        <hr>
    </div> -->

    <div class="container bg-white px-0 pb-5 shadow-lg">
        
        <div class="d-flex justify-content-between align-items-center bg-primary px-5">
            <div class="">
                <h1 class="text-white fw-bold">BANCO FASSIL</h1>
            </div>

            <img src="./img/logo.png" style="height:90px;"/>
        </div>

        <div class="px-5 mt-5 d-flex justify-content-center flex-column align-items-center">
            <div class="shadow px-5 pb-5">
                <h2 class="fw-bold text-uppercase fs-1 mb-4 text-center mt-4">Proporciona datos de numero de cuenta a depositar</h2>
                <img src="./img/proporcionaD.png" style="width:600px; height:300px;" class="shadow"/>
            </div>
            
        </div>
        <div class="w-50 mt-5 border border-dark p-3">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre;?>">
            </div>

            <div class="mb-3">
                <label for="paterno" class="form-label">Apellido Paterno:</label>
                <input type="text" class="form-control" id="paterno" name="paterno" value="<?php echo $paterno;?>">
            </div>
        </div>
        


    </div>



    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>