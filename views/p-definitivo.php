<!DOCTYPE html>
<html lang="es">
<head>
  <title>Préstamo definitivo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../carpeta-estilos/estilos.css">
  <script>
    function ingresar(descripcion){
        location.href = "../DAO/tiendaDAO.php?op=1&C="+descripcion;
    }
  </script>
</head>
<body >
<header>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
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


        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../images/portada/salondact2.jpg" class="d-block  portada" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../images/portada/emc2-2.jpg" class="d-block  portada" alt="..." >
            </div>
            <div class="carousel-item">
              <img src="../images/portada/neuronalN2.jpg" class="d-block  portada" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          </div>
          </div>
        <h1 class = "text-center text-light display-4 bg-dark ">Servicio de Préstamo de Mobiliario de la US</h1>
</header>
    
    <h1 class = "text-center display-3">Servicio de prestamo definitivo<br></h1>
    <h2 class = "text-center text-muted h2"> Material disponible <br><br></h2>
        <!-- A continuacion añadiremos el tipo de material disponible para el préstamo -->

        <div id = "container" class="container border bg-light shadow p-3 mb-5 bg-white rounded">
            <div class="row align-items-center" style = "">
                <div class="col-sm m-5 p-2 catalogo align-middle shadow p-3 mb-5 bg-white rounded" style = "border-style : solid">
                    <a onclick = "ingresar('MD')" class = "text-muted lead pl-2 text-justify "  target = "_self">
                        <figure class = "text-center">
                            <img id = "materialselector" src="../images/escritorios.png" alt="Mesas" class = "mt-3" >
                                <figcaption style = "text-align : center">
                                    Mesas y escritorios
                                </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="col-sm m-5 p-2 catalogo shadow p-3 mb-5 bg-white rounded" >
                    <a onclick = "ingresar('SD')" class = "text-muted lead pl-2 text-justify" target = "_self">
                        <figure class = "text-center">
                            <img id = "materialselector" src="../images/sillonesoficina2.png" alt="SillonesOficina">
                                <figcaption class = "text-center">
                                    Sillas y sillones
                                </figcaption>
                        </figure>
                    </a>
                </div>
            </div>

            <div class="row ">
                <div class="col-sm m-5 p-2 catalogo shadow p-3 mb-5 bg-white rounded" style = "border-style : solid">
                    <a onclick = "ingresar('PD')" class = "text-muted lead pl-2 text-justify " target = "_self">
                        <figure class = "text-center">
                            <img id = "materialselector" src="../images/pizarras.png" alt="Tarimas" class = "mt-3">
                                <figcaption style = "text-align : center">
                                    Pizarras
                                </figcaption>
                        </figure>       
                    </a>
                </div>
                <div class="col-sm m-5 p-2 catalogo shadow p-3 mb-5 bg-white rounded" style = "border-style : solid">
                    <a onclick = "ingresar('MLD')" class = "text-muted lead pl-2 text-justify " target = "_self">
                        <figure class = "text-center">
                            <img id = "materialselector" src="../images/mueblelibrería.png" alt="Expositores" class = "mt-3">
                                <figcaption style = "text-align : center">
                                    Muebles librería
                                </figcaption>
                        </figure>    
                    </a>
                </div>
                <div class="col-sm m-5 p-2 catalogo shadow p-3 mb-5 bg-white rounded" style = "border-style : solid">
                    <a onclick = "ingresar('AD')" class = "text-muted lead pl-2 text-justify "  target = "_self">
                        <figure class = "text-center">
                            <img id = "materialselector" src="../images/armarios.png" alt="Expositores" class = "mt-3 ">
                                <figcaption style = "text-align : center">
                                    Armarios
                                </figcaption>
                        </figure>    
                    </a>
                </div>
            </div>
            <div class="row align-items-center ">
                <div class="col-sm m-5 p-2 catalogo shadow p-3 mb-5 bg-white rounded" style = "border-style : solid">
                    <a href = "../DAO/tiendaDAO.php?op=1&C=OD" class = "text-muted lead pl-2 text-justify " target = "_self">
                        <figure class = "text-center">
                            <img id = "materialselector" src="../images/otros.png" alt="Otros" class = "mt-3 ">
                                <figcaption style = "text-align : center">
                                    Otros
                                </figcaption>
                        </figure>    
                    </a>
                </div>
            </div>
        </div>

    <footer class = "bg-dark text-light p-2">
		<blockquote class = "text-center"> 
             <p>Servicio de Préstamo de Mobiliario de la Universidad de Sevilla </p></blockquote>
	</footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>