<?php
    require_once("conexion2.php");
    session_start();
    if(isset($_SESSION['boleta_sesion'])){
        $boleta = $_SESSION['boleta_sesion'];
        $usuario = $_SESSION['usuario_sesion'];
        $tabla_nombre = "vendedor_" . $boleta;
    }

    if (isset($_GET['cerrar_sesion'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ESCOMHUB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--Main Navigation-->
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
                                                          <a class="text-center my-1" href="formulariocliente.html"><button type="button" class="btn btn-outline-dark"> Cliente</button></a>
                                                          si eres vendedor el siguiente formulario es para tí
                                                          <a class="text-center my-1" href="formulariovendedor.html"><button type="button" class="btn btn-outline-dark"> vendedor</button></a>
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

<!-- sidebar + content -->
<section class="">

  <div class="container">
    <p class="ejemplo2"><?php echo "Bienvenid@... " . $usuario; ?><br> A continuación un resumen de tus productos publicados</p>
    <div class="crearNuevo">
      <a class="btn btn-success shadow-0 btn-lg" type="button" href="agregarproducto.php">
        <i class="bi bi-plus"></i>
          Agregar Nuevo
      </a>
    </div>

    <div class="row">
      <!-- content -->
      <div class="col-lg-9">

  <?php
        //GENERACIÓN DE CARTAS CON LOS ARTICULOS

        $sql = "SELECT * FROM " . $tabla_nombre;
        $resultado = $conexion2->query($sql);
        while ($row = $resultado->fetch_assoc()) {
  ?>
        <div id="item2" class="row justify-content-center mb-3">
          <div class="col-md-12">
            <div class="card shadow-0 border rounded-3">
              <div class="card-body">
                <div class="row g-0">
                  <div class="col-xl-3 col-md-4 d-flex justify-content-center">
                    <div class="bg-image hover-zoom ripple rounded ripple-surface me-md-3 mb-3 mb-md-0">
                      <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" class="w-100">
                      <a href="#!">
                        <div class="hover-overlay">
                          <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-5 col-sm-7">
                    <h5><?php echo $row['nombreproducto'];?></h5>
                    <div class="d-flex flex-row">
                      <div class="text-warning mb-1 me-2">
                        <?php
                          $numeroAleatorio = rand(1, 5);
                          for($i=0; $i < $numeroAleatorio; $i++){ 
                            echo'
                            <i class="fa fa-star"></i>';
                          }
                          echo'
                          <span class="ms-1">
                            '.$numeroAleatorio.'
                          </span>';
                        ?>
                      </div>
                      <span class="valorRestante text-muted"><?php echo $row['vendidos'];?></span> 
                      /
                      <span class="valorTotal text-muted"><?php echo $row['cantidad'];?></span> 
                      <span class="text-white">O</span>
                      <span class="text-muted">Vendidas</span> 
                    </div>

                    <p class="text-dark text-center">                      
                      <?php echo $row['descripcion'];?>
                    </p>

                  </div>
                  <div class="col-xl-3 col-md-3 col-sm-5">
                    <div class="d-flex flex-row align-items-center mb-1">
                      <h4 class="mb-1 me-1"><?php echo "$" .$row['precio'];?></h4>
                      <span class="text-danger">C/U</span>
                    </div>
                    <?php
                      if($row['cantidad']>6 and $numeroAleatorio >3){
                        echo'
                        <h6 class="text-success">
                          <i class="bi bi-check"></i> Todo Bien
                        </h6>';
                      }elseif($row['cantidad']<6 and $numeroAleatorio >3){
                        echo'
                        <h6 class="text-warning">
                          <i class="bi bi-exclamation-triangle"></i> Stock Bajo
                        </h6>';
                      }elseif($numeroAleatorio<=3){
                        echo'
                        <h6 class="text-danger">
                          <i class="bi bi-x"></i> Malas reseñas
                        </h6>';
                      }
                    ?>
                    <div class="mt-4">
                      <a class="btn btn-primary shadow-0" type="button" href="editar.php?id=<?php echo $row["id"]; ?>">
                        <i class="bi bi-pencil-square"></i>
                          Editar
                      </a>   
                      <button onclick="esconder2()" class="btn btn-danger shadow-0" type="button">
                        <i class="fa fa-trash"></i> Eliminar
                    </button>               
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  <?php
      }
  ?>
        <!-- Pagination -->
        <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
          <ul class="pagination">
            <li class="page-item disabled">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- Pagination -->
      </div>
    </div>
  </div>
</section>
<!-- Footer -->
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
      <li class="nav-item"><a href="formulariovendedor.html" class="nav-link px-2 ">Forma parte de ESCOMHUB</li>
  </ul>
  <a style="text-decoration: none;" href="index.php"><p class="text-center ">© 2023 ESCOMHUB</p></a>
</footer>
<!-- Footer -->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>
