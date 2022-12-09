  
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
                <h2 class="fw-bold text-uppercase fs-1 mb-4 text-center mt-4">Verifica los datos de la cuenta de deposito
todo correcto?</h2>
                <img src="./img/verificaD.png" style="width:600px; height:300px;" class="shadow"/>
            </div>
            
        </div>
        <div class="container-md mt-5 offset-md-0">
                    <div class="row text-start">
                        <div class="col-md-12 offset-md-0">
                            <div class="mb-5">
                                <label class="form-check-label" for="flexCheckDefault"> Disponer del documento de identificación</label>
                                <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off">
                                <label class="btn btn-outline-success float-end" for="btn-check-outlined">Documento Revisado</label><br>
                            </div>
                            <div class="mb-5">
                                <label class="form-check-label" for="flexCheckDefault"> Nombre Cuenta</label>
                                <input type="checkbox" class="btn-check" id="btn-check-outlined1" autocomplete="off">
                                <label class="btn btn-outline-success float-end" for="btn-check-outlined1">Documento Revisado</label><br>
                            </div>
                            <div class="mb-5">
                                <label class="form-check-label" for="flexCheckDefault"> Nro Cuenta </label>
                                <input type="checkbox" class="btn-check" id="btn-check-outlined2" autocomplete="off">
                                <label class="btn btn-outline-success float-end" for="btn-check-outlined2">Documento Revisado</label><br>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>

    </div>



    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>