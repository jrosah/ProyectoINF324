  
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
            <div class="shadow px-5 pb-5 bg-light">
                <h2 class="fw-bold text-uppercase text-primary fs-1 mb-4 text-center mt-4">Pedir</h2>
                <img src="./img/pedir.jpg" style="width:600px; height:300px;" class="shadow"/>
            </div>
            
        </div>

        <div class="container mt-5 w-50 border px-0">
            <table class="table border-dark">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">Documentos</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cedula de identidad (CI):</td>
                        <td>
                            <select name="foto" style="height: 35px; width: 100px;" class="form-select">    
                                <option value="Si">Si</option>    
                                <option value="No">No</option>    
                            </select><br>   
                        </td>
                    </tr>
                    <tr>
                        <td>Firma:</td>
                        <td>
                            <select name="cnac" style="height: 35px; width: 100px;" class="form-select">    
                                <option value="Si">Si</option>    
                                <option value="No">No</option>    
                            </select><br>   
                        </td>
                    </tr>

                    <tr>
                        <td>Fotocopia de Cédula de Identidad (anverso/reverso):</td>
                        <td>
                            <select name="fci" style="height: 35px; width: 100px;" class="form-select">    
                                <option value="Si">Si</option>    
                                <option value="No">No</option>    
                            </select><br>   
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>