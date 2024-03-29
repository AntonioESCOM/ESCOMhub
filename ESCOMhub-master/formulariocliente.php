<?php
    require_once("registrar.php");
?>

<!DOCTYPE html>
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
        <br>
        <br>
        <br>
        <main>
                <div class="row container-fluid">
                    
                    <div class="col-6 mx-auto">
                        <h4 class="mb-3">Formulario de registro</h4>
                        <?php echo $mensaje; ?>
                        <form method="post" action="" class="needs-validation" novalidate="">
                          <div class="row g-3">
                            <div class="col-sm-6">
                              <label for="firstName" class="form-label">Nombre</label>
                              <input type="text" class="form-control" id="firstName" name="nombrecl" placeholder="" 
                              value="" required="">
                              <div class="invalid-feedback">
                                Valid first name is required.
                              </div>
                            </div>
                
                            <div class="col-sm-6">
                              <label for="lastName" class="form-label">Apellido</label>
                              <input type="text" class="form-control" id="lastName" name="apellidocl" placeholder="" 
                              value="" required="">
                              <div class="invalid-feedback">
                                Valid last name is required.
                              </div>
                            </div>
                
                            <div class="col-12">
                              <label for="username" class="form-label">Boleta</label>
                              <div class="input-group has-validation">
                                <span class="input-group-text">IPN</span>
                                <input type="text" class="form-control" id="username" placeholder="Boleta IPN" 
                                name="boletacl" required="">
                              <div class="invalid-feedback">
                                  Your username is required.
                                </div>
                              </div>
                            </div>
                
                            <div class="col-12">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" class="form-control" id="email" placeholder="you@example.com" 
                              name="correocl">
                              <div class="invalid-feedback">
                                  Por favor ingrese un correo valido
                              </div>
                            </div>
                
                            <div class="col-12">
                              <label for="address" class="form-label">Contraseña</label>
                              <input type="text" class="form-control" id="address" placeholder="Ingresa su contraseña" 
                              name="passwordcl" required="">
                              <div class="invalid-feedback">
                                Por favor ingrese una contraseña valida
                              </div>
                            </div>
                
                            <div class="col-12">
                              <label for="address2" class="form-label">Repetir contraseña</label>
                              <input type="text" class="form-control" id="address2" placeholder="Repetir contraseña" 
                              name="pass2">
                            </div>
                
                            <div class="col-md-6">
                              <label for="zip" class="form-label">Telefono</label>
                              <input type="text" class="form-control" id="zip" placeholder="example: 5587414029" 
                              name="telefonocl" required="">
                              <div class="invalid-feedback">
                                Zip code required.
                              </div>
                            </div>
                            <div class="col-md-6">
                              <label for="zip" class="form-label">Facebook, Ig, Telegram</label>
                              <input type="text" class="form-control" id="zip" placeholder="Red social de tu preferencia" name="redsocialcl" required="">
                              <div class="invalid-feedback">
                                Zip code required.
                              </div>
                            </div>
                          </div>
                          <hr class="my-4">
                          <input type="submit" class="w-100 btn btn-primary btn-lg" value="Registrarse" name="registrar">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</html>