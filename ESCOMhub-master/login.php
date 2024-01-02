<?php include 'controladorInicio.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ESCOMHUB</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="colorfondolog  ">
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
                                            </ul>
                                        </div>
                                    </div>
                                </li>
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

    <main>
        <div  class="card mx-auto my-5 rounded-5" style="width: 26rem;">
            <div>
                <img  src="imgs/Black Gobi 1 .png" class="card-img-top position-absolute" alt="Fondo login">
                <p class="position-relative mt-4 text-white letracards mb-0 ms-4 fs-5">Bienvenido de vuelta a ESCOMHub</p>
                <p class="position-relative ms-4 text-white letracards fs-6">Descubre tus nuevos favoritos</p>
            </div>
            <div class="card-body position-sticky px-4">
                <form method="post" action="">
                    <br>
                    <br>
                    <br>
                <?php echo $mensaje; ?>
                    <div class="form-floating mt-4">
                      <input class="form-control" id="floatingInput" placeholder="20xx63xxxx" name="boletaI">
                      <label for="floatingInput">Número de boleta </label>
                    </div>
                    <div class="form-floating my-4">
                      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" 
                      name="passwordI">
                      <label for="floatingPassword">Contraseña</label>
                    </div>
                
                    <div class="form-check text-start my-3">
                      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                      </label>
                    </div>

                    <input type="submit" class="btn btn-primary w-100 py-2 mb-4" value="Sign in" name="iniciar">
                    <div class="row mt-4 ">
                        <div class="col-8">        
                            <p class="  mb-0 text-body-secondary">¿No tienes una cuenta?</p>
                        </div>
                        <div class="col-4">
                            <a class="estilolinkregistro mb-0" href="formulariocliente.php">Registrate</a>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-8">        
                            <p class=" text-body-secondary">¿Quieres formar parte de ESCOMhub?</p>
                        </div>
                        <div class="col-4">
                            <a class="estilolinkregistro" href="formulariovendedor.php">Registrate</a>
                        </div>
                    </div>

                    
                  </form>
            </div>

          </div>
    </main>

    <footer class="py-3 mt-5 footerestilos">
        <ul class="nav justify-content-center pb-3 mb-3">
            <li class="nav-item">
                <a href="#" class="nav-link px-2"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Contacto</a>
                <!-- Modal -->
                <div class="modal fade letraalef" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-4 fw-bold" id="staticBackdropLabel">Contacto</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h2 class="fs-5">Correo de desarolladores </h2>
                            <p class="fs-6 letraalef text-dark">En caso de alguna duda con el sistema o inconsistencia favor de enviar correo a los siguientes correos</p>
                            <br>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">morales.martinez.jose.antonio@gmail.com</li>
                                    <li class="list-group-item">brandonbeleche11@gmail.com</li>
                                    <li class="list-group-item">amadridc1800@alumno.ipn.mx</li>
                                </ul>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link px-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Conocenos</a>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-4" id="exampleModalLabel">Conocenos</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <i class="fab fa-facebook-square"></i> EscomHubIPN
                                </li>
                                <li class="list-group-item">
                                    <i class="fab fa-instagram-square"></i> EscomHubIPN
                                </li>
                                <li class="list-group-item">
                                    <i class="fa-brands fa-tiktok"></i> EscomHub
                                </li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
            
            </li>
            <li class="nav-item"><a href="formulariovendedor.php" class="nav-link px-2 ">Forma parte de ESCOMHUB</li>
        </ul>
        <a style="text-decoration: none;" href="index.php"><p class="text-center ">© 2023 ESCOMHUB</p></a>
    </footer>

</body>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var hoy = new Date();
        var nombresMeses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
        var fecha = hoy.getDate() + ' de ' + nombresMeses[hoy.getMonth()] + ' de ' + hoy.getFullYear();
        document.getElementById('fecha-actual').textContent = fecha;
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>