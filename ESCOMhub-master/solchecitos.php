<!doctype html>
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
                                                    <li><a class="dropdown-item my-2 me-1 " href="crud_vendedor.php">Productos publicados</a></li>
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
                    </li> 
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
        <main>

            <div class="row container-fluid">
                <div class="col-sm-5">
                    <div class="mx-auto p-5 text-center">
                        <h2 class="letracards text-dark  fs-2 fw-bold">
                            Solchecitos
                        </h2>
                        <img width="300px" height="156px" src="imgs/solchecitos.png" class="card-img-top" alt="Solchecitos">
                        <p class="text-dark fs-5">Fecha de publicación <span> 4 de Noviembre 2023</span></p>
                        <div class="row">
                            <div class="col-sm-6 pe-1 div_botoncar-comprodcuto">
                                <button id="enseñarc" class="btn botoncar-comprodcuto w-100  rounded-start-pill boton-compra-sm fs-5" type="button">Comprar Ahora</button>
                            </div>
                            <div class="col-sm-6 ps-1 div_botoncar-comprodcuto">
                                <button class="btn botoncar-comprodcuto w-100 rounded-end-pill boton-compra-sm fs-5" type="button">Ahora el Carrito</button>
                            </div>
                            

                        </div>
                    </div>

                </div>
                <div class="col-sm-7 text-end mt-5">

                    <div class="row container">
                        <div class="col-6">
                        </div>
                        <div class="col-6">
                            <div class="estrellas text-end">
                                <p class="text-body-tertiary">(6 reviews)</p>
                                <img src="imgs/image 14.png" alt="estrellas">
                            </div>
                            <h5 class="card-title text-end letracards colorletrasprecio mt-2 fw-semibold">$10 C/U </h5>
                            <div class="progress text-end mb-2" role="progressbar" aria-label="Danger example" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-danger" style="width: 15%"></div>
                            </div>
                            <h5 class="text-dark text-end letracard my-3 fs-5">3/20 :Vendidas </h5>
                        </div>
                    </div>
                    <div class="row container">
                        <div class="col-6">
                            <div class="card rounded-5">
                                <div class="rounded-5 rounded-bottom-0 text-center card-header botoncar-comprodcuto letraalef fs-5">
                                    Descripción
                                </div>
                                <div class="card-body color_card_descrip rounded-5 rounded-top-0 ">
                                    <h6 class="card-title text-center fs-5 letraalef">Solchecitos Extremos al 2x1, conoce la nueva forma de botanear</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card rounded-5 mb-3">
                                <div class="rounded-5 rounded-bottom-0 text-center card-header botoncar-comprodcuto letraalef fs-5">
                                    Horarios de Atención
                                </div>
                                <div class="card-body color_card_descrip rounded-5 rounded-top-0 ">
                                    <h6 class="card-title text-center fs-5 letraalef">Lunes a Viernes de 10am a 5pm</h6>
                                </div>
                            </div>
                            <div id="contacto" class="card rounded-5 ocultar_contacto"> 
                                <div class="rounded-5 rounded-bottom-0 text-center card-header botoncar-comprodcuto letraalef fs-5">
                                    Datos de Contacto
                                </div>
                                <div class="card-body color_card_descrip rounded-5 rounded-top-0 ">
                                    <h6 class="card-title text-center "><a class="fs-5 letraalef"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                        </svg> 5524209358</a>
                                    </h6>
                                    <h6 class="card-title text-center "><a class="fs-5 letraalef">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-messenger" viewBox="0 0 16 16">
                                            <path d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.639.639 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.639.639 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76m5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z"/>
                                        </svg>
                                        Brandon Beleche
                                    </a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row container mt-3">
                        <div class="card rounded-5 px-0 ">
                            <div class="rounded-5 rounded-bottom-0 text-center card-header botoncar-comprodcuto letraalef fs-5">
                                Reseñas
                            </div>
                            <div class="card-body color_card_descrip rounded-5 rounded-top-0 divConScroll">
                                <h6 class="card-title text-center fs-5 letraalef">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod accusantium eligendi eum nobis nisi ratione aliquid odit delectus. Nihil repellat a dolorum sint molestiae. Aliquam cum sunt eveniet repudiandae consequuntur!
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit similique, pariatur aliquid amet, nesciunt officiis reiciendis voluptatibus illum error nihil sint culpa eveniet animi hic alias, aperiam sunt! Consectetur, maxime?
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa quidem quae facere quaerat officiis fuga at temporibus quia magni doloribus! Provident doloremque debitis dolorum expedita, quo eveniet eaque nobis vero!
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non assumenda sed pariatur! Vitae repudiandae nemo assumenda ex similique, pariatur vero labore eaque quo laborum impedit saepe odit cupiditate voluptates numquam.
                                    Asperiores molestiae molestias inventore aperiam, animi totam dignissimos veniam suscipit voluptate, ullam eaque error est autem delectus iusto eligendi dolores architecto commodi ex laboriosam reiciendis fugit nam? Ipsa, iste at?
                                    Aliquid laudantium dolorum sint officiis dolorem id, quasi perferendis, sapiente iusto cumque, eaque ducimus maxime! Repellat omnis cum, harum ut, possimus rerum atque velit porro id sed, fugit dignissimos corrupti.
                                    Inventore deleniti hic ipsa cumque repudiandae, numquam reiciendis id corporis voluptates, temporibus tempora facere! Neque consequuntur odit animi magni reiciendis quo, architecto sequi. Reprehenderit tempore dolorem quos ipsa maxime quas!
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                                    
                    
                <div class="row container mt-5">
                    <div class="col-md-6 pe-5">
                        <div class="text-center mt-5">
                            <h1 class="letraalef fw-bold">También te podría interesar...</h1>
                            <div class="text-end flecha-sugerencia">
                                <img style="height: 7rem; width: 10rem;" src="imgs/image 31.png" alt="Flecha">
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3 mx-auto">
                        <button class="sinborde">
                            <div class="card" style="width: 16rem;">
                                <img src="imgs/image 10 (1).png" class="card-img-top" alt="Galletas del cosco">
                                <div class="card-body">
                                    <h5 class="card-title text-end letracards mb-0">Rebanada de pizza </h5>
                                    <h5 class="card-title text-end letracards">Cosco </h5>
                                    <div class="estrellas text-end">
                                        <p class="text-body-tertiary">(14 reviews)</p>
                                        <img src="imgs/image 14.png" alt="estrellas">
                                    </div>
                                    <h5 class="card-title text-end letracards colorletrasprecio mt-2 fw-semibold">$25 C/U </h5>
                                    <div class="progress text-end mb-2" role="progressbar" aria-label="Danger example" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-danger" style="width: 15%"></div>
                                    </div>
                                    <h5 class="text-dark text-end letracard my-3 fs-5">2/20 :Vendidas </h5>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="col-md-3 mx-auto">
                        <button class="sinborde">
                            <div class="card" style="width: 16rem;">
                                    <img src="imgs/imagen 9 (1).jpg" class="card-img-top" alt="Galletas del cosco">
                                <div class="card-body">
                                    <h5 class="card-title text-end letracards mb-0">Refresco 355ml </h5>
                                    <h5 class="card-title text-end letracards">Variedad de sabores</h5>
                                    <div class="estrellas text-end">
                                        <p class="text-body-tertiary">(6 reviews)</p>
                                        <img src="imgs/image 14.png" alt="estrellas">
                                    </div>
                                    <h5 class="card-title text-end letracards colorletrasprecio mt-2 fw-semibold">$10 C/U </h5>
                                    <div class="progress text-end mb-2" role="progressbar" aria-label="Danger example" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-danger" style="width: 15%"></div>
                                    </div>
                                    <h5 class="text-dark text-end letracard my-3 fs-5">3/20 :Vendidas </h5>
                                </div>
                            </div>
                            </button>
                    </div>
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