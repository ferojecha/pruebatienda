<!DOCTYPE html>
<html lang="es">
<head>
  <title>Préstamo temporal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../carpeta-estilos/estilos.css">
  

</head>
<body>
<header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a href="index.php" class = "navbar-brand" target = "_self">
                <img src="../images/vectorpaint.svg" class="mr-0 p-0 d-inline-block" width = "75px" >
            </a>
            <button class = "navbar-toggler" data-toggle = "collapse" data-target = "#navbarMenu">
                <span class = "navbar-toggler-icon"> </span>
            </button>
            <div class = "collapse navbar-collapse" id = "navbarMenu">
                <ul class = "navbar-nav">
                    <li class = "nav-item ml-4">
                        <a id = "mish" href="index.php" class = "nav-link" target = "_self"> <p class = "nav-text">INICIO</p></a>
                    </li>
                    <li class = "nav-item dropdown ml-4">
                        <a id = "navbarDropdown1" href="#" class = "nav-link dropdown-toggle"
                        role = "button" data-toggle = "dropdown" > SPMUS</a>
                            <div class = "dropdown-menu" aria-labelledby = "navbarDropdown1" >
                                <a href="#" class = "dropdown-item">¿QUÉ ES EL SPMUS?</a>
                                <div class = "dropdown-divider"></div>
                                <a href="#" class = "dropdown-item">¿QUIÉN PUEDE SOLICITAR UN PRÉSTAMO?</a>
                                <div class = "dropdown-divider"></div>
                                <a href="#" class = "dropdown-item">CONDICIONES DE PRÉSTAMO</a>

                            </div>
                    </li>
                    <li class = "nav-item dropdown ml-4">
                        <a id = "navbarDropdown2" href="#" class = "nav-link dropdown-toggle" 
                        role = "button" data-toggle = "dropdown">PRÉSTAMOS</a>
                        <div class = "dropdown-menu" aria-labelledby ="navbarDropdown2">
                            <a href="p-temporal.php" class = "dropdown-item" target = "_self" >PRÉSTAMO TEMPORAL</a>
                            <div class = "dropdown-divider"></div>
                                <a href="p-definitivo.php" class = "dropdown-item" target = "_self">PRÉSTAMO DEFINITIVO</a>
                            </div>
                    </li>
                    <li class = "nav-item ml-4">
                        <a href="contacto.php" class = "nav-link" target = "_self"><p class = "nav-text">CONTACTO</p></a>
                    </li>
                </ul>
            </div>    
        </nav>


        <div class = "bg-light">


        
</header>
    
    <h1 class = "text-center display-5 mt-2">Servicio de prestamo temporal<br></h1>
    <h2 class = "text-center text-muted"> Material disponible <br> <br></h2>
        <!-- A continuacion añadiremos el tipo de material disponible para el préstamo -->

        <div id = "container" class="container border  shadow  mb-5 bg-white rounded">
        <div class= "row ">
            <div class = "col ">
            <div class = "card-group m-3 text-center">
                <div onclick = "window.location = '../DAO/tiendaDAO.php?op=1&C=MT'"  class="card mr-4 catalogo2  bg-white " style="width: 18rem;">
                    <div class = "card-header text-white bg-primary"> MESAS Y ESCRITORIOS</div>
                    <div class="card-body">
                        <img src="../images/DB-imgs/mesa3.png" class="card-img-top" alt="...">
                            
                                <a id = "cosa1" href="#" class="btn btn-outline-primary boton-añadir text-center">+ MÁS</a>
                            
                    </div>
                </div>
                <div onclick = "window.location = '../DAO/tiendaDAO.php?op=1&C=ST'" class="card mr-4 catalogo2" style="width: 18rem;">
                    <div class = "card-header text-white bg-primary"> SILLAS Y SILLONES</div>
                    <div class="card-body catalogo2">
                        <img src="../images/DB-imgs/silla1.png" class="card-img-top" alt="...">
                        <a href="#" class="btn btn-outline-primary boton-añadir">+ MÁS</a>
                    </div>
                </div>
                <div onclick = "window.location = '../DAO/tiendaDAO.php?op=1&C=TT'" class="card mr-4 catalogo2" style="width: 18rem;">
                    <div class = "card-header text-white bg-dark"> TARIMAS</div>
                    <div class="card-body catalogo2">
                        
                        <img src="../images/DB-imgs/tarima1.png" class="card-img-top" alt="...">
                        <a href="#" class="btn btn-outline-dark boton-añadir ">+ MÁS</a>
                    </div>
                </div>
                <div onclick = "window.location = '../DAO/tiendaDAO.php?op=1&C=ET'" class="card catalogo2" style="width: 18rem;">
                    <div class = "card-header text-white bg-dark">EXPOSITORES</div>
                    <div class="card-body catalogo2">
                       
                        <img src="../images/DB-imgs/expositor1.png" class="card-img-top" alt="...">
                        <a href="#" class="btn btn-outline-dark boton-añadir">+ MÁS</a>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <!-- La siguiente sección es una propuesta alternativa a la presentación visual de las categorías de seleccion -->
        <br>
        <h2 class = "display-4 text-center text-muted"> Propuesta estética alternativa</h3>
            
            <div class= "row align-items-center">
                <div class="col-sm m-5 p-2 catalogo" style = "border-style : solid">
                    <a class = "text-muted lead pl-2 text-justify " href="#" target = "_self">
                        <figure class = "text-center">
                            <img id = "materialselector" src="../images/mesa3.png" alt="Mesas"  >
                                <figcaption style = "text-align : center">
                                    Mesas y escritorios
                                </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="col-sm m-5 p-1 catalogo" >
                    <a class = "text-muted lead pl-2 text-justify" href="#" target = "_self">
                        <figure class = "text-center">
                            <img id = "materialselector" src="../images/silla1.png" alt="Sillas">
                                <figcaption class = "text-center">
                                    Sillas
                                </figcaption>
                        </figure>
                    </a>
                </div>
            </div>

            <div class="row align-items-center ">
                <div class="col-sm m-5 p-2 catalogo" style = "border-style : solid">
                    <a class = "text-muted lead pl-2 text-justify " href="#" target = "_self">
                        <figure class = "text-center">
                            <img id = "materialselector" src="../images/tarimas.png" alt="Tarimas">
                                <figcaption style = "text-align : center">
                                    Tarimas
                                </figcaption>
                        </figure>       
                    </a>
                </div>

                <div class="col-sm m-5 p-2 catalogo" style = "border-style : solid">
                    <a class = "text-muted lead pl-2 text-justify " href="#" target = "_self">
                        <figure class = "text-center">
                            <img id = "materialselector" src="../images/expositores.png" alt="Expositores" class = "mt-3 " >
                                <figcaption style = "text-align : center">
                                    Expositores
                                </figcaption>
                        </figure>    
                    </a>
                </div>
            </div>
            <!-- Aquí termina la propuesta alternativa de presentación de categorías -->
        </div>   <!-- Aquí termina el div container -->
        
		
    <footer class = "bg-dark text-light p-2">
		<blockquote class = "text-center"> 
             <p>Servicio de Préstamo de Mobiliario de la Universidad de Sevilla </p></blockquote>
	</footer>

<!-- Enlaces imprescindibles para el correcto funcionamiento de la página y todo el jquery que tiene -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>