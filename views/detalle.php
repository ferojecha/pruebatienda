<!DOCTYPE html>
<?php 
    // LLamamos a la clase que nos interesa para establecer la conexion con la BBDD y poder 
    // listar los productos elegidos por el cliente
    // Utilizando sessiones somos capaces de enviar recoger el valor de determinadas variables 
    // que nos resultarán útiles para el desarrollo de la presente página.
    include '../DAO/methodsDao.php';
    session_start();
    $cod = $_GET['cod'];
    $objMetodos = new MetodosDAO();
    $lista=$objMetodos->ListarProductosCod($cod);
    
    // definimos las variables que nos interesan para describir el producto
    $nombre=$lista[1];
    $ruta =$lista[2];
    $existencias=$lista[3];
    $descripcion=$lista[4];
    $carpeta_imgs = substr($ruta,0,-4);
   
?>
<html lang="es">
<head>
  <title>Index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.css">
  <link rel="stylesheet" type="text/css" href="../carpeta-estilos/estilos.css">

</head>
<!-- Esta página será llamada en una ventana modal desde la página catálogo -->
<body>
    <div class = " container  border bg-light align-items-center "> 
                <div class = " m-3 row border border-secondary rounded-lg bg-white">
                    <div class = "col justify-content-center">
                        <a href=<?php echo "visor.php?carpeta=" . $carpeta_imgs; ?> target = "_blank">
                            <figure>
                                <img class = "rounded mx-auto d-block my-1" src="../images/DB-imgs/<?php echo $ruta;?>" alt="'$ruta'"  height = "250px" width = auto > 
                            </figure>
                            <div class = "d-flex justify-content-center"> 
                            <button type="button" class="btn btn-primary btn-lg mb-2"> + detalles</button>
                            </div>
                        </a>
                    </div>
                    
                    <div class = "col-md "> 
                        <div class = "row-md">    
                            <p class = "titulo-detalle" >
                                <?php
                                    echo $nombre; 
                                ?>
                            </p>
                        </div>

                        <div class = "row-md">    
                            <p class = "text-muted text-start   " style = "font-size : 20px;">
                                <?php
                                    echo $descripcion;
                                ?>
                            </p>
                        </div>
                        <div class = "row justify-content-end"> 
                            <div class = "col text-right ">   
                                <p class = "font-weight-light text-muted" style = "font-size : 15px;">
                                    <?php
                                        echo "*Los portes corren a cargo del solicitante";
                                    ?>
                                </p>
                            </div>
                        </div>

                        <div class = "row text-center align-items-end">
                            <div class = "col">
                                <p class = "text-muted lead" style = "font-size : 17px;">
                                    <?php 
                                    echo 'Disponibilidad: ' . $existencias . 'uds.'; 
                                    ?>
                                </p>
                            </div>
                            <div class = "col">
                                <p class = "text-muted lead" style = "font-size : 17px;">
                                    Seleccione cantidad: <input id = "select-quant" name="txtCan" class = " btn btn-light btn-sm" type="number" value="1" min = "1" max = "<?php echo $existencias; ?>" size = "4"/>
                                </p>
                            </div>
                            
                        </div>

                    </div>
                </div>

    </div>

   
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.js"></script>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  

</body>
</html>