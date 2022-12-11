  
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

    <div class="container bg-white px-0 pb-5 shadow-lg" style="background-color:#164B71!important;">
        
        <div class="d-flex justify-content-between align-items-center bg-primary px-5" style="background-color:#1BABA3!important;">
            <div class="">
                <h1 class="text-white fw-bold">BANCO FASSIL</h1>
            </div>

            <img src="./img/logo.png" style="height:90px;"/>
        </div>

        <div class="px-5 mt-5 d-flex justify-content-center flex-column align-items-center">
            <div class="shadow px-5 pb-5 bg-light">
                <h2 class="fw-bold text-uppercase text-primary fs-1 mb-4 text-center mt-4">Presentación de Documentos y Datos</h2>
                <img src="./img/F302.JPG" style="max-width:600px;height:300px;background-size: cover;" class="shadow"/>

                
                <div class="container-md mt-5   ">
                    <div class="row text-start">
                        <div class="col-md-6 offset-md-3">
                                <fieldset>
                                    <label for="disabledTextInput" class="form-label">Usuario</label>
                                    <div class="mb-3">
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="" value="<?php echo $usuarioc;?>" name="usuarioc">
                                    </div>
                                    <label for="disabledTextInput" class="form-label">Nombre Completo</label>
                                    <div class="mb-3">
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="" value="<?php echo $nombreCompleto;?>" name="nombreCompleto">
                                    </div>
                                    <label for="disabledTextInput" class="form-label">CI</label>
                                    <div class="mb-3">
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="" value="<?php echo $ci;?>" name="ci">
                                    </div>
                                    <label for="disabledTextInput" class="form-label">Fecha de Nacimiento</label>
                                    <div class="mb-3">
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="" value="<?php echo $fechaNac;?>" name="fechaNac">
                                    </div>
                                    <label for="disabledTextInput" class="form-label">Direccion</label>
                                    <div class="mb-3">
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="" value="<?php echo $direccion;?>" name="direccion">
                                    </div>
                                    <label for="disabledTextInput" class="form-label">Correo electrónico</label>
                                    <div class="mb-3">
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="" value="<?php echo $correo;?>" name="correo">
                                    </div>
                                    <label for="disabledTextInput" class="form-label">Telefono/Celular</label>
                                    <div class="mb-3">
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="" value="<?php echo $telefono;?>" name="telefono">
                                    </div>
                                    <div class="mb-3">
                                        <div class="mb-3">
                                            <label for="disabledTextInput" class="form-label">Cargue los documentos solicitados</label>

                                            <label for="formFileMultiple" class="form-label"></label>
                                            <input class="form-control" type="file" id="formFileMultiple" multiple>
                                        </div>
                                    </div>
                                </fieldset>
                        </div>
                    </div>

                </div>







            </div>
            
        </div>

    </div>



    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>