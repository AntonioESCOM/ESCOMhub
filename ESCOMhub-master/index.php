<?php
    require_once("configurar.php");
    session_start();
    if(isset($_SESSION['boleta_sesion'])){
        $boleta = $_SESSION['boleta_sesion'];
        $usuario = $_SESSION['usuario_sesion'];
    }

    if (isset($_GET['cerrar_sesion'])) {
        session_destroy();
        header("Location: login.php");
        exit();
    }
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
        <main>
            <section  class="navbar navbar-expand-lg navbar-dark Navbarestilos ">
                <div class="container-fluid">            
                    <!-- Menú de navegación -->
                    <div class="collapse navbar-collapse fw-normal" id="navbarNav">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active px-0" aria-current="page" href="#">
                                <div class="container-fluid ">
                                    <div class="row ms-2">
                                        <div class="col-7 pe-0">                        
                                            <i class="bi bi-cart3 "></i> Tu Carrito 
                                            <span>$0.00</span></div>
                                        <div class="col-5 px-0 my-auto icon-container">
                                            <svg  style="width:2.5rem;" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-handbag" viewBox="0 0 16 16">
                                                <path d="M8 1a2 2 0 0 1 2 2v2H6V3a2 2 0 0 1 2-2m3 4V3a3 3 0 1 0-6 0v2H3.36a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.355a2.5 2.5 0 0 0 2.473-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 1 0 1 0V6z"/>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-0-circle-fill icon-top" viewBox="0 0 16 16">
                                                <path d="M8 4.951c-1.008 0-1.629 1.09-1.629 2.895v.31c0 1.81.627 2.895 1.629 2.895s1.623-1.09 1.623-2.895v-.31c0-1.8-.621-2.895-1.623-2.895Z"/>
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-8.012 4.158c1.858 0 2.96-1.582 2.96-3.99V7.84c0-2.426-1.079-3.996-2.936-3.996-1.864 0-2.965 1.588-2.965 3.996v.328c0 2.42 1.09 3.99 2.941 3.99Z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active px-0" href="#">
                            <div class="container-fluid">
                                <div style="width:12.5rem;"class="row">
                                    <div class="col-7 px-0">                        
                                        <i class="bi bi-heart"></i> Favoritos<br>
                                        <span>Lista de deseos</span>
                                    </div>
                                    <div class="col-5 px-0 my-auto icon-container">
                                        <svg style="width:2.5rem;" xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                                        </svg>
                                        <svg  stye="top:-1rem;"xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-0-circle-fill icon-top" viewBox="0 0 16 16">
                                            <path d="M8 4.951c-1.008 0-1.629 1.09-1.629 2.895v.31c0 1.81.627 2.895 1.629 2.895s1.623-1.09 1.623-2.895v-.31c0-1.8-.621-2.895-1.623-2.895Z"/>
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-8.012 4.158c1.858 0 2.96-1.582 2.96-3.99V7.84c0-2.426-1.079-3.996-2.936-3.996-1.864 0-2.965 1.588-2.965 3.996v.328c0 2.42 1.09 3.99 2.941 3.99Z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </li>
                        <?php
                    if (isset($_SESSION['boleta_sesion']) && !empty($_SESSION['boleta_sesion'])) {
                    echo '
                    <li class="nav-item">
                        <a class="nav-link active px-0" href="catalogov.php">
                            <div class="container-fluid">
                                <div style="width:12.5rem;" class="row">
                                    <div class="col-7 px-0">
                                                                
                                            <i class="bi bi-person"></i>'.$boleta.'<br>
                                            <span>'.$usuario.'</span>
                                    </div>
                                    <div class="col-5 px-0 my-auto">
                                        <svg style="width:2.5rem;" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>';

            }else{
                    echo'
                        <li class="nav-item">
                        <a class="nav-link active px-0" href="login.php">
                            <div class="container-fluid">
                                <div style="width:12.5rem;" class="row">
                                    <div class="col-7 px-0">                        
                                        <i class="bi bi-person"></i> Identificate<br>
                                        <span>Iniciar sesión</span>
                                    </div>
                                    <div class="col-5 px-0 my-auto">
                                        <svg style="width:2.5rem;" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>';
                }    
            ?>
                    </ul>
                    </div>
                    <div style="width: 31rem;">
                        <form class="d-flex">
                            <button style="border-radius:0; background-color: #FCBE00;"   class="btn" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                </svg>
                            </button>
                            <input style="border-radius:0;"class="form-control me-2 text-end" type="search" placeholder="...Estoy buscando" aria-label="Search">
                        </form>
                    </div>
                </div>
            </section>
            <div  id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div style="background-image: url(imgs/image\ 7.png);" class="carousel-inner">
                  <div class="carousel-item active mt-5 ">
                    
                    <div class="row ">
                        <div class="col mt-5">
                            <div class="text-center mt-5">
                                <button  style="border-radius: 0;" type="button" class="btn coloramarillo letraadvant">EN OFERTA</button>
                            </div>
                            <p class="text-center mt-5 mb-0 letrabaloo fs-5">SOLCHECITOS EXTREMOS AL 2X1</p>
                            <p class="text-center fuente-eslogan fs-5">CONOCE LA NUEVA FORMA DE BOTANEAR</p>  
                            <div class="text-center mt-5">
                                <button  style="border-radius: 0;" type="button" class="btn bg-white letraadvant"> COMPRA AHORA</button>
                            </div>
                        </div>
                        <div class="col">
                            <div class="img-fluid mb-3">
                                <img src="imgs/solchecitos.png" class="productocarrusel" alt="solchecitos">
                            </div>
                        </div>
                      </div>
    
                    
                  </div>
                  <div class="carousel-item mt-5">
                    <div class="row ">
                        <div class="col mt-5">
                            <div class="text-center mt-5">
                                <button  style="border-radius: 0;" type="button" class="btn coloramarillo letraadvant">EN OFERTA</button>
                            </div>
                            <p class="text-center mt-5 mb-0 letrabaloo fs-5">PAPAS SOL A TAN SOLO $18</p>
                            <p class="text-center fuente-eslogan fs-5">CONOCE LA NUEVA FORMA DE BOTANEAR</p>  
                            <div class="text-center mt-5">
                                <button  style="border-radius: 0;" type="button" class="btn bg-white letraadvant">COMPRA AHORA</button>
                            </div>
                        </div>
                        <div class="col">
                            <div class="img-fluid mb-3">
                                <img src="imgs/Papas-sol (1).png" class="productocarrusel" alt="solchecitos">
                            </div>
                        </div>
                      </div>
                  </div>
                  <div class="carousel-item mt-5">
                    <div class="row ">
                        <div class="col mt-5">
                            <div class="text-center mt-5">
                                <button  style="border-radius: 0;" type="button" class="btn coloramarillo letraadvant">EN OFERTA</button>
                            </div>
                            <p class="text-center mt-5 mb-0 letrabaloo fs-5">CACAHUATES KARATE</p>
                            <p class="text-center fuente-eslogan fs-5">A SOLO 5 PESOS CON SALSA AL GUSTO</p>  
                            <div class="text-center mt-5">
                                <button  style="border-radius: 0;" type="button" class="btn bg-white letraadvant">COMPRA AHORA</button>
                            </div>
                        </div>
                        <div class="col">
                            <div class="img-fluid mb-3">
                                <img src="imgs/cacahuates (1).png" class="productocarrusel" alt="solchecitos">
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            <br>
            <div class="container text-center">
                <div class="row mt-3">
<?php
        //GENERACIÓN DE CARTAS CON LOS ARTICULOS

        $sql = "SELECT * FROM productos ORDER BY RAND() LIMIT 4";
        $resultado = $conexion2->query($sql);
        while ($row = $resultado->fetch_assoc()) {
  ?>
                    <div class="col-md-3">
                            <button class="sinborde ">
                            <a href="producto.php?id=<?php echo $row["id"]; ?>">
                            <div class="card" style="width: 16rem;">
                                <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" 
                                class="card-img-top" alt="<?php echo htmlspecialchars($row['nombreproducto']); ?>">
                                <div class="card-body">
                                    <h5 class="card-title text-end letracards mb-0"><?php echo $row['nombreproducto'];?></h5>
                                    <div class="estrellas text-end">
                                        <p class="text-body-tertiary"><?php $numeroAleatorio = rand(0, 10);
                                        echo "(".$numeroAleatorio." reviews)"?></p>
                                        <img src="imgs/image 14.png" alt="estrellas">
                                    </div>
                                    <h5 class="card-title text-end letracards colorletrasprecio mt-2 fw-semibold">
                                    <?php echo "$ " .$row['precio']. "C/U";?> </h5>
                                    <div class="progress text-end mb-2" role="progressbar" aria-label="Danger example" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-danger" style="width: 15%"></div>
                                    </div>
                                    <h5 class="text-dark text-end letracard my-3 fs-5"><?php echo $row['vendidos']."/".$row['cantidad']." Vendidas";?></h5>
                                </div>
                            </div>
                            </a>
                            </button>
                    </div>
        <?php
            } //<-- fin while -->
        ?>
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
