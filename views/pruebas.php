<!DOCTYPE html>
<html lang="es">
<head>
  <title>Pruebas de programación SPMUS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.css">
  <link rel="stylesheet" type="text/css" href="../carpeta-estilos/estilos.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a href="" class = "navbar-brand">
                <!-- <img src="images/logoUS.ico" class="mr-0 p-0 d-inline-block" width = "77px" > -->
                <img src="../images/vectorpaint.svg" class="mr-0 p-0 d-inline-block" width = "77px" >
            </a>
            <button class = "navbar-toggler" data-toggle = "collapse" data-target = "#navbarMenu">
                <span class = "navbar-toggler-icon"> </span>
            </button>
            <div class = "collapse navbar-collapse" id = "navbarMenu">
                <ul class = "navbar-nav">
                    <li class = "nav-item">
                        <a href="index.php" class = "nav-link" target = "_self">Inicio</a>
                    </li>
                    <li class = "nav-item dropdown">
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
                    <li class = "nav-item dropdown">
                        <a id = "navbarDropdown2" href="#" class = "nav-link dropdown-toggle" 
                        role = "button" data-toggle = "dropdown">Préstamos</a>
                        <div class = "dropdown-menu" aria-labelledby ="navbarDropdown2">
                            <a href="webintario.php" class = "dropdown-item" target = "_self" >Préstamo temporal</a>
                            <div class = "dropdown-divider"></div>
                                <a href="#" class = "dropdown-item">Préstamo definitivo</a>
                            </div>
                    </li>
                    <li class = "nav-item">
                        <a href="#" class = "nav-link">Conócenos</a>
                    </li>
                </ul>
            </div>    
        </nav>
    </header>
    <script> //probando los eventos de js 
        $(document).ready(function () {
            $("a").click(function () {
                // alert("ayyyyyyy");
            });
            
        });
    </script>

<div class = "container shadow p-3 mb-5 bg-white rounded"> 
    <div class = "galeria1" id = "galeria1">
        <div class = "row">
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
            <div class = "col-md-3">
                <div class = "card">
                    <a href="../images/logoUS.png">
                        <img src="../images/DB-imgs/mesa3.png" alt="" class = "card-img-top">
                    </a>
                </div>
            </div>
           
        </div>

        <div class = "row">
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
</div>
<?php 
    $lista_archivos = array();
  
    $directorio = opendir("../images/DB-imgs/escritorio1");
    while ($elemento = readdir($directorio)) {
        array_push($lista_archivos,$elemento);
        echo $elemento;
    }
?> 


   





<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.js"></script>
<script>
    baguetteBox.run('#galeria1')
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
