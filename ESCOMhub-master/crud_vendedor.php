<?php
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
    <?php require_once('header.php');?>

<!-- sidebar + content -->
<section class="">

  <div class="container">
    <p class="ejemplo">Bienvenida... Pedidos Flaquitos S.A de C.V.</p>
    <p class="ejemplo2">A continuación un resumen de tus productos publicados</p>
    <div class="crearNuevo mb-3 mx-auto">
      <button class="btn btn-success shadow-0 btn-lg" type="button">
        <i class="bi bi-plus"></i>
            <a style="text-decoration:none; color:white;" href="agregarproducto.php">Agregar Nuevo</a>
      </button>
    </div>

    <div class="row">
      <!-- content -->
      <div class="col-lg-9">

        <!-- Item 1 -->
        <div id="item" class="row justify-content-center mb-3">
          <div class="col-md-12">
            <div class="card shadow-0 border rounded-3">
              <div class="card-body">
                <div class="row g-0">
                  <div class="col-xl-3 col-md-4 d-flex justify-content-center">
                    <div class="bg-image hover-zoom ripple rounded ripple-surface me-md-3 mb-3 mb-md-0">
                      <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/8.webp" class="w-100" />
                      <a href="#!">
                        <div class="hover-overlay">
                          <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-5 col-sm-7">
                    <h5>Galletas de Costco con chispas de chocolate</h5>
                    <div class="d-flex flex-row">
                      <div class="text-warning mb-1 me-2">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>  
                        <span class="ms-1">
                          4
                        </span>
                      </div>
                      <span class="valorRestante text-muted">3</span> 
                      /
                      <span class="valorTotal text-muted">10</span> 
                      <span class="text-white">O</span>
                      <span class="text-muted">Vendidas</span> 
                    </div>

                    <p class="text-dark text-center">
                      ¡Descubre la deliciosa excelencia de nuestras exclusivas galletas de Costco! Sumérgete en la experiencia de sabor que solo Costco puede ofrecer 
                      con nuestro irresistible producto. Estas galletas son el deleite perfecto para cualquier ocasión, desde meriendas rápidas hasta indulgentes 
                      caprichos.
                    </p>

                  </div>
                  <div class="col-xl-3 col-md-3 col-sm-5">
                    <div class="d-flex flex-row align-items-center mb-1">
                      <h4 class="mb-1 me-1">$25.00</h4>
                      <span class="text-danger">C/U</span>
                    </div>
                    <h6 class="text-success">
                      <i class="bi bi-check"></i> Todo Bien
                    </h6>
                    <div class="mt-4">
                      <button class="btn btn-primary shadow-0" type="button">
                        <i class="bi bi-pencil-square"></i>
                          Editar
                      </button>   
                      <button onclick="esconder1()" class="btn btn-danger shadow-0" type="button">
                        <i class="fa fa-trash"></i> Eliminar
                    </button>               
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Item 2 -->
        <div id="item2" class="row justify-content-center mb-3">
          <div class="col-md-12">
            <div class="card shadow-0 border rounded-3">
              <div class="card-body">
                <div class="row g-0">
                  <div class="col-xl-3 col-md-4 d-flex justify-content-center">
                    <div class="bg-image hover-zoom ripple rounded ripple-surface me-md-3 mb-3 mb-md-0">
                      <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/8.webp" class="w-100" />
                      <a href="#!">
                        <div class="hover-overlay">
                          <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-5 col-sm-7">
                    <h5>Pizza de Costco</h5>
                    <div class="d-flex flex-row">
                      <div class="text-warning mb-1 me-2">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <span class="ms-1">
                          5
                        </span>
                      </div>
                      <span class="valorRestante text-muted">25</span> 
                      /
                      <span class="valorTotal text-muted">30</span> 
                      <span class="text-white">O</span>
                      <span class="text-muted">Vendidas</span> 
                    </div>

                    <p class="text-dark text-center">                      
                      ¡La perfección existe en cada rebanada con nuestras pizzas exclusivas de Costco! Sumérgete en una experiencia gastronómica inigualable 
                      con la combinación perfecta de ingredientes frescos y sabrosos. Nuestra pizza es famosa por su sabor irresistible, 
                      tamaño generoso y calidad premium.
                    </p>

                  </div>
                  <div class="col-xl-3 col-md-3 col-sm-5">
                    <div class="d-flex flex-row align-items-center mb-1">
                      <h4 class="mb-1 me-1">$25.00</h4>
                      <span class="text-danger">C/U</span>
                    </div>
                    <h6 class="text-warning">
                      <i class="bi bi-exclamation-triangle"></i> Stock Bajo
                    </h6>
                    <div class="mt-4">
                      <button class="btn btn-primary shadow-0" type="button">
                        <i class="bi bi-pencil-square"></i>
                          Editar
                      </button>   
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

        <!-- Item 3 -->
        <div id="item3" class="row justify-content-center mb-3">
          <div class="col-md-12">
            <div class="card shadow-0 border rounded-3">
              <div class="card-body">
                <div class="row g-0">
                  <div class="col-xl-3 col-md-4 d-flex justify-content-center">
                    <div class="bg-image hover-zoom ripple rounded ripple-surface me-md-3 mb-3 mb-md-0">
                      <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/8.webp" class="w-100" />
                      <a href="#!">
                        <div class="hover-overlay">
                          <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-5 col-sm-7">
                    <h5>Trufa de nuez</h5>
                    <div class="d-flex flex-row">
                      <div class="text-warning mb-1 me-2">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i> 
                        <i class="fa fa-star-o"></i>   
                        <i class="fa fa-star-o"></i>                        
                        <i class="fas fa-star-half-alt"></i>
                        <span class="ms-1">
                          2
                        </span>
                      </div>
                      <span class="valorRestante text-muted">25</span> 
                      /
                      <span class="valorTotal text-muted">30</span> 
                      <span class="text-white">O</span>
                      <span class="text-muted">Vendidas</span> 
                    </div>

                    <p class="text-dark text-center">
                      ¡Descubre la deliciosa excelencia de nuestras exclusivas galletas de Costco! Sumérgete en la experiencia de sabor que solo Costco puede ofrecer 
                      con nuestro irresistible producto. Estas galletas son el deleite perfecto para cualquier ocasión, desde meriendas rápidas hasta indulgentes 
                      caprichos.
                    </p>

                  </div>
                  <div class="col-xl-3 col-md-3 col-sm-5">
                    <div class="d-flex flex-row align-items-center mb-1">
                      <h4 class="mb-1 me-1">$25.00</h4>
                      <span class="text-danger">C/U</span>
                    </div>
                    <h6 class="text-danger">
                      <i class="bi bi-x"></i> Malas reseñas
                    </h6>
                    <div class="mt-4">
                      <button class="btn btn-primary shadow-0" type="button">
                        <i class="bi bi-pencil-square"></i>
                          Editar
                      </button>   
                      <button onclick="(esconder3())" class="btn btn-danger shadow-0" type="button">
                        <i class="fa fa-trash"></i> Eliminar
                    </button>               
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</section>
<!-- Footer -->
<?php require_once('footer.php');?>
<!-- Footer -->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>