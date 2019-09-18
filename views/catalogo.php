<?php
    session_start();
    $lista = $_SESSION['lista'];
   
    // $op = $_SESSION['op'];
    // echo $op;
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Catálogo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.css">

  <link rel="stylesheet" type="text/css" href="../carpeta-estilos/estilos.css"/>

</head>
<body>
<header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a href="index.php" class = "navbar-brand" target = "_self">
                <img src="../images/vectorpaint.svg" class="mr-0 p-0 d-inline-block" width = "125px" >
            </a>
            <button class = "navbar-toggler" data-toggle = "collapse" data-target = "#navbarMenu">
                <span class = "navbar-toggler-icon"> </span>
            </button>
            <div class = "collapse navbar-collapse" id = "navbarMenu">
                <ul class = "navbar-nav">
                    <li class = "nav-item ml-4">
                        <a id = "mish" href="index.php" class = "nav-link" target = "_self"> <p class = "nav-text">Inicio</p></a>
                    </li>
                    <li class = "nav-item dropdown ml-4">
                        <a id = "navbarDropdown1" href="#" class = "nav-link dropdown-toggle"
                        role = "button" data-toggle = "dropdown">SPMUS</a>
                            <div class = "dropdown-menu" aria-labelledby = "navbarDropdown1" >
                                <a href="#" class = "dropdown-item">¿Qué es el SPMUS?</a>
                                <div class = "dropdown-divider"></div>
                                <a href="#" class = "dropdown-item">¿Quién puede solicitar un préstamo?</a>
                                <div class = "dropdown-divider"></div>
                                <a href="#" class = "dropdown-item">Condiciones del préstamo</a>

                            </div>
                    </li>
                    <li class = "nav-item dropdown ml-4">
                        <a id = "navbarDropdown2" href="#" class = "nav-link dropdown-toggle" 
                        role = "button" data-toggle = "dropdown">Préstamos</a>
                        <div class = "dropdown-menu" aria-labelledby ="navbarDropdown2">
                            <a href="p-temporal.php" class = "dropdown-item" target = "_self" >Préstamo temporal</a>
                            <div class = "dropdown-divider"></div>
                                <a href="p-definitivo.php" class = "dropdown-item" target = "_self">Préstamo definitivo</a>
                            </div>
                    </li>
                    <li class = "nav-item ml-4">
                        <a href="contacto.php" class = "nav-link" target = "_self">Contacto</a>
                    </li>
                </ul>
            </div>    
        </nav>
</header>

    
    <h1 class = "text-center display-3 mb-4">Catálogo<br></h1>

    <!-- A continuacion añadiremos el catálogo para elegir el material a solicitar -->
    <div id = "container-cat" class="container border bg-light shadow  mb-5 bg-white rounded">
        
            <?php
            if ($lista == Null) {
                echo '<h2 class = "display- text-muted text-center m-5"> *Actualmente no hay disponibilidad de los productos seleccionados </h2>';
                echo '</div>';
            } else {
            
            
            echo '<div class = "row align-items-center ">';
            $num = 0;
            
            echo '</br></br>';
            foreach ($lista as $reg){
                if ($num == 2) {
                    echo '</div>';
                    echo '<div class = "row align-items-center">';
                    $num = 1;
                }else {
                    $num++;
                }
            
                echo '<div class="catalogo col-sm m-5 p-2 shadow "><figure class = "text-center"><img src="../images/DB-imgs/' . $reg[2] . '" height = 200px width = auto> <figcaption class = "text-muted lead">' . $reg[1] . '</figcaption> </figure>';
                echo '<br>';


                echo '<div class="row">';
                    echo '<div class = "col" style = "text-align : center">';
                        echo '<button type = "button" data-toggle = "modal" data-target = ".bd-example-modal-lg" class = "btn btn-outline-primary btn-lg modal-lg btn" onclick = "enviar(\'' . $reg[0] . '\')"> Ver detalles </button>';
                    echo '</div>';
    
                echo '</div>';
            echo '</div>';
                
            }
        
        
    echo '</div>';
        echo '</div>';
        } 
        ?>      


<!-- Ventana modal para mostrar la información del producto seleccionado -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="ml-2 modal-title" id="exampleModalLabel">Detalle del Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id = "mostrar" class="modal-body">
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Añadir al carrito</button>
      </div>
    </div>
  </div>
</div>



<!-- <div class = "container"> 
    <div class = "galeria1">
        <div class = "row">
            <div class = "col-md-3">
                <div class = "card">
                    <a href="../images/logoUS.png" data-caption = "imagen 1">
                        <img src="../images/DB-imgs/mesa3.png" alt="" class = "card-img-top">
                    </a>
                </div>
            </div>
            <div class = "col-md-3">
                <div class = "card">
                    <a href="../images/logoUS.png">
                        <img src="../images/DB-imgs/mesa3.png" alt="" class = "card-img-top">
                    </a>
                </div>
            </div>
            <div class = "col-md-3">
                <div class = "card">
                    <a href="../images/logoUS.png">
                        <img src="../images/DB-imgs/mesa3.png" alt="" class = "card-img-top">
                    </a>
                </div>
            </div>
            <div class = "col-md-3">
                <div class = "card">
                    <a href="../images/logoUS.png">
                        <img src="../images/DB-imgs/mesa3.png" alt="" class = "card-img-top">
                    </a>
                </div>
            </div>
           
        </div> -->

        <!-- <div class = "row">
        <div class = "col-md-3">
                <div class = "card">
                    <a href="../images/logoUS.png">
                        <img src="../images/DB-imgs/mesa3.png" alt="" class = "card-img-top">
                    </a>
                </div>
            </div><div class = "col-md-3">
                <div class = "card">
                    <a href="../images/logoUS.png">
                        <img src="../images/DB-imgs/mesa3.png" alt="" class = "card-img-top">
                    </a>
                </div>
            </div><div class = "col-md-3">
                <div class = "card">
                    <a href="../images/logoUS.png">
                        <img src="../images/DB-imgs/mesa3.png" alt="" class = "card-img-top">
                    </a>
                </div>
            </div><div class = "col-md-3">
                <div class = "card">
                    <a href="../images/logoUS.png">
                        <img src="../images/DB-imgs/mesa3.png" alt="" class = "card-img-top">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> -->

<script>
        var resultado = document.getElementById("mostrar")
        function enviar(c){
            var xmlhttp;
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    resultado.innerHTML = xmlhttp.responseText;
                }   
            }
            xmlhttp.open("GET","detalle.php?cod="+c, true);
            
            xmlhttp.send();
              
        }
    </script>
    

    <footer class = "bg-dark text-light p-2 fluid">
		<blockquote class = "text-center"> 
             Servicio de Préstamo de Mobiliario de la Universidad de Sevilla </blockquote>
    </footer>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.js"></script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>