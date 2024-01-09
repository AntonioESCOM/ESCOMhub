<?php
?>

<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ESCOMHUB</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
    <body>
    <?php require_once('header.php'); ?>
    <main>
        <h4 class="my-3 text-center">Agregar producto</h4>
        <div class="row container-fluid ">
            <div class="col-6 ms-5 mb-3 pe-0">
                    <label for="inputnameP" class="form-label">Ingresa el nombre del producto</label>
                    <input type="text" id="inputnameP" class="form-control" aria-describedby="nameHelpBlock">
                    <div id="nameHelpBlock" class="form-text">
                    El nombre de tu producto debe estar compuesto de 8 a 32 caracteres, se creativo.
                </div>
            </div>
        </div>

        <div class="row container-fluid">
                <div class="col-6 ms-5 mb-3">
                    <label for="DescripcionProduct" class="form-label">Agrega una breve descripción de tu producto, se admiten hasta 300 caracteres </label>
                    <textarea class="form-control" id="DescripcionProduct" rows="3"></textarea>
                </div>
        </div>

        <div class="row container-fluid">
            <div class="col-3 ms-5 mb-3">
                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Precio">
                    <span class="input-group-text">.00</span>
                </div>
            </div>
            <div class="col-3">
                <div class="input-group mb-3">
                        <span class="input-group-text">C</span>
                        <input type="number" class="form-control" placeholder="Cantidad">
                    </div>
            </div>


        </div>

        <div class="row container-fluid">
            <div class="col-6 col-3 ms-5 mb-3">
                <label for="formFile" class="form-label">Selecciona tu imagen, debe de ser de 300,160 px</label>
                <input class="form-control" type="file" id="formFile">
                <div class="mt-1">
                    <a href="https://www.iloveimg.com/es/redimensionar-imagen#resize-options,pixels">REDIMENSIONAR </a>
                </div>
            </div>
        </div>

        <div class="row container-fluid">
            <div class="col-6 mt-2 ms-5">
            <select class="form-select" aria-label="Default select example">
                <option selected>Categoria</option>
                <option value="1">Comida Preparada</option>
                <option value="2">Golosinas y frituras</option>
                <option value="3">Electronica</option>
                <option value="4">Papeleria</option>
                <option value="5">Servicios</option>
                <option value="6">Ropas y Accesorios</option>
                <option value="7">Videojuegos & Juguetes</option>
                <option value="8">Libros & material apoyo</option>


            </select>
            </div>

        </div>
        <div class="row conatiner-fluid">
            <div class="col-6 ms-5 mt-5 ">
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="button">Enviar</button>

                </div>
            </div>
            
        </div>

    </main>

    <?php require_once('footer.php');?>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</html>