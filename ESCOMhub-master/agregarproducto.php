<?php
    require_once("agregar.php");
    $mensaje = "";
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
        <header>
            <nav class="navbar navbar-expand-lg Navbarestilos">
                <div class="container-fluid">
                    <div>
                        
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <img class="logo_marca_sm d-lg-none ms-5" src="imgs/logo.png" alt="Logo_escom_hub">
                        
                    </div>
                    <div class="collapse navbar-collapse ms-5 py-1 row" id="navbarNavDropdown">
                            <div class="col-8">
                                <ul class="navbar-nav ">
                                    <li class="nav-item">
                                        <div class="dropdown">
                                            <a class="nav-link borde-derecho py-0 px-4" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                Preguntas frecuentes
                                            </a>
                                            <div class="container-fluid">
                                                <ul class="dropdown-menu menu_desplegable_index">
                                                    <li>   
                                                        <a class="dropdown-item my-2 me-1" data-bs-toggle="collapse" href="#collapseExample"  >¿Cómo me registro?</a>
                                                        <div class="collapse" id="collapseExample">
                                                            <div  class="card card-body letraadvant text-justify">
                                                                Si eres cliente el siguiente formulario te ayudará a registrarte, una vez registrado, puedes iniciar sesión desde el apartado de login 
                                                                <a class="text-center my-1" href="formulariocliente.php"><button type="button" class="btn btn-outline-dark"> Cliente</button></a>
                                                                si eres vendedor el siguiente formulario es para tí
                                                                <a class="text-center my-1" href="formulariovendedor.php"><button type="button" class="btn btn-outline-dark"> vendedor</button></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item my-2 me-1 " data-bs-toggle="collapse" href="#collapseRequisitos">Qué necesito para formar parte</a>
                                                        <div class="collapse" id="collapseRequisitos">
                                                            <div class="card card-body letraadvant text-justify">
                                                                Para ser cliente basta con proporcionarnos los siguientes datos:
                                                                <ul>
                                                                    <li>Nombre completo</li>
                                                                    <li>Boleta</li>
                                                                    <li>Correo electronico</li>
                                                                    <li>Alguna red social</li>
                                                                </ul>
                                                                Para ser vendedor basta con proporcionarnos los siguientes datos:
                                                                <ul>
                                                                    <li>Nombre completo</li>
                                                                    <li>Boleta</li>
                                                                    <li>Correo electronico</li>
                                                                    <li>Whatsapp (obligatorio)</li>
                                                                    <li>Facebook (obligatorio)</li>
                                                                    <li>Categoria o categorias de productos</li>
                                                                    <li>Horarios de atención</li>
                                                                    <li>Para la publicación de articulos se necesita una fotografia nitida de 300x150 px en cualquier formato tipo imagen</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item my-2 me-1 " data-bs-toggle="collapse" href="#collapsecostos">Tinen algun costo para el vendedor?</a>
                                                        <div class="collapse" id="collapsecostos">
                                                            <div class="card card-body letraadvant text-justify">
                                                                Para los vendedores se les cobrara una pequeña tarifa de acuerdo a la categoria del producto,
                                                                si gustas adquirir la membresia de ESCOMhub, tiene un costo de $300 pesos le cual tiene como principal beneficio
                                                                que aparezca el producto en el banner principal.
                                                            </div>
                                                        </div>
                                                        
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    <li class="nav-item">
                                        <div class="dropdown">
                                            <a class="nav-link borde-derecho py-0 px-4" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                Vendedores
                                            </a>
                                            <div class="container-fluid">
                                                <ul class="dropdown-menu menu_desplegable_index d1">
                                                    <li><a class="dropdown-item my-2 me-1" href="#">Quiero vender</a></li>
                                                    <li><a class="dropdown-item my-2 me-1 " href="#">Productos publicados</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="dropdown">
                                            <a class="nav-link borde-derecho py-0 px-4" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                                Categoria
                                            </a>
                                            <div class="container-fluid">
                                                <ul class="dropdown-menu menu_desplegable_index d2">
                                                    <li><a class="dropdown-item my-2 me-1" href="#">Comida preparada</a></li>
                                                    <li><a class="dropdown-item my-2 me-1 " href="#">Golosinas y frituras</a></li>
                                                    <li><a class="dropdown-item my-2  me-1" href="#">Electronica</a></li>
                                                    <li><a class="dropdown-item my-2  me-1" href="#">Papeleria</a></li>
                                                    <li><a class="dropdown-item my-2  me-1" href="#">Servicios</a></li>
                                                    <li><a class="dropdown-item my-2  me-1" href="#">Ropa y accesorios</a></li>
                                                    <li><a class="dropdown-item my-2  me-1" href="#">Videojuegos & juguetes</a></li>
                                                    <li><a class="dropdown-item my-2  me-1" href="#">Libros & material apoyo</a></li>
                                                    <li><a class="dropdown-item my-2  me-1" href="#">Postres</a></li>
                                                    <li><a class="dropdown-item my-2  me-1" href="#">Bebidas</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                            <?php
                                if (isset($_SESSION['boleta_sesion']) && !empty($_SESSION['boleta_sesion'])) {
                                    echo '
                                    <li class="nav-item">
                                            <a class="nav-link borde-derecho py-0 px-4" aria-expanded="false" href="?cerrar_sesion=1">
                                                Cerrar sesión
                                            </a>
                                    </li>';
                                }
                            ?>
                                </ul>
                            </div>
                            <div class="col-4 d-none d-lg-block">    
                                <ul class="navbar-nav ">                    
                                <div class="text-end">
                                    <li>
                                        <a class="py-0 px-4 nav-link">Hoy es: <span id="fecha-actual"></span></a>
                                    </li>
                                </div>
                            </div>
                        
                        </div>

                    </div>
                </div>
            
            </nav>
            <div class="Navbarestilos borde-top  d-none d-lg-block">
                <div class="contenedor ">
                    <a href="index.php"><img class="logo_marca" src="imgs/logo.png" alt="Logo_escom_hub"></a>
                </div>
                <div>
                    <p  class=" fuente-eslogan text-center mb-0 ">¡Conecta, Compra, Estudia! Tu mercado estudiantil en un solo lugar</p>
                </div>
            </div>
            <!-- ---------------------------------------------------------------------------------- -->
        
        </header>
    <body>
    <main>
        <h4 class="my-3 text-center">Agregar producto</h4>
        <?php echo $mensaje; ?>
        <form action="" method="post" enctype="multipart/form-data" id="formularioproduc">
        <div class="row container-fluid ">
            <div class="col-6 ms-5 mb-3 pe-0">
                    <label for="inputnameP" class="form-label">Ingresa el nombre del producto</label>
                    <input type="text" id="inputnameP" class="form-control" aria-describedby="nameHelpBlock" name="nombreproduc">
                    <div id="nameHelpBlock" class="form-text">
                    El nombre de tu producto debe estar compuesto de 8 a 32 caracteres, se creativo.
                </div>
            </div>
        </div>

        <div class="row container-fluid">
                <div class="col-6 ms-5 mb-3">
                    <label for="DescripcionProduct" class="form-label">Agrega una breve descripción de tu producto, se admiten hasta 300 caracteres </label>
                    <textarea class="form-control" id="DescripcionProduct" rows="3" name="descproduc"></textarea>
                </div>
        </div>

        <div class="row container-fluid">
            <div class="col-3 ms-5 mb-3">
                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="number" step="0.1" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Precio" name="precioproduc">
                    <span class="input-group-text">MXN</span>
                </div>
            </div>
            <div class="col-3">
                <div class="input-group mb-3">
                        <span class="input-group-text">C</span>
                        <input type="number" class="form-control" placeholder="Cantidad" name="cantidadproduc">
                    </div>
            </div>


        </div>

        <div class="row container-fluid">
            <div class="col-6 col-3 ms-5 mb-3">
                <label for="formFile" class="form-label">Selecciona tu imagen, debe de ser de 300,160 px</label>
                <input class="form-control" type="file" id="formFile" name="imagenproduc">
                <div class="mt-1">
                    <a href="https://www.iloveimg.com/es/redimensionar-imagen#resize-options,pixels" target=”_blank”>REDIMENSIONAR </a>
                </div>
            </div>
        </div>

        <div class="row container-fluid">
            <div class="col-6 mt-2 ms-5">
            <select class="form-select" aria-label="Default select example" name="categoriaproduc">
                <option selected>Categoria</option>
                <option value="comida preparada">Comida Preparada</option>
                <option value="golosinas y frituras">Golosinas y frituras</option>
                <option value="electronica">Electronica</option>
                <option value="papeleria">Papeleria</option>
                <option value="servicios">Servicios</option>
                <option value="ropas y accesorios">Ropas y Accesorios</option>
                <option value="videojuegos & juguetes">Videojuegos & Juguetes</option>
                <option value="libros & material apoyo">Libros & material de apoyo</option>
                <option value="postres">Postres</option>
                <option value="bebidas">Bebidas</option>
            </select>
            </div>

        </div>
        <div class="row conatiner-fluid">
            <div class="col-6 ms-5 mt-5 ">
                <div class="d-grid gap-2">
                    <input type="submit" class="btn btn-primary" value="Enviar" name="enviarproduc">
                </div>
            </div>
            
        </div>
    </form>

    </main>

    <?php require_once('footer.php');?>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</html>