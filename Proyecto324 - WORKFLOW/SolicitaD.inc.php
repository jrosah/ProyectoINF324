  
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

    <div class="container bg-white px-0 pb-5 shadow-lg" style="background-color:#9575CD!important;">
        
        <div class="d-flex justify-content-between align-items-center px-5" style="background-color:#311B92;">
            <div class="">
                <h1 class="text-white fw-bold">BANCO FASSIL</h1>
            </div>

            <img src="./img/logo.png" style="height:90px;"/>
        </div>

        <div class="px-5 mt-5 d-flex justify-content-center flex-column align-items-center">
            <div class="shadow px-5 pb-5 bg-light">
                <h2 class="fw-bold text-uppercase fs-1 mb-4 text-center mt-4">Solicita numero de cuenta a depositar</h2>
                <img src="./img/nrocuenta.jpg" style="max-width:600px;height:300px;background-size: cover;" class="shadow"/>
                <div class="w-50 mt-5 border border-dark p-3">
               

              <select class="form-select" id="inputGroupSelect01">
                    <option selected>Nro Cuenta</option>
                    <option value="1">10000030453934</option>
                    <option value="2">10000030453775</option>
                    <option value="3">10000030458894</option>
                </select>

             
            </div>
            
            <div class="mb-3 w-50 mt-2">
                <label for="nombre" class="form-label">Monto:</label>
                <input type="text" class="form-control" id="nombre" name="nombreCompleto" value="400">
            </div>
            </div>
            
        </div>
    </div>


    </div>



    <script src="./js/bootstrap.bundle.min.js"></script>
    <script >var slcchange = document.getElementById("#slcAutos");
            slcchange.addEventListener("change", function() {
            console.log(slcchange.value)
            });

    </script>
</body>

</html>