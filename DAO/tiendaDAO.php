<?php

session_start();

include './methodsDao.php';
$op=$_GET['op'];
$C = $_GET['C'];
echo '<h1>' . $C . '</h1>';
// $clasi = $_GET['clasi'];

if ($op != null) {
    echo '<h3> La variable $op ha sido recibida exitosamente y es de tipo: ' . gettype($op) . '</h3>';
} else{
    echo 'No se ha recibido el parámetro op. Algo falla en la conexión';
    }


switch ($op){
    case 1:
        unset($_SESSION['lista']); // limpia la variable
        $objMetodo = new MetodosDAO();
        $lista = $objMetodo->ListarProductosName($C);
        $_SESSION['lista'] = $lista;
        header("Location: ../views/catalogo.php");
        break;
    case 2;
        // break;
        echo '<h3> op vale 2 </h3>';
    
}
?>