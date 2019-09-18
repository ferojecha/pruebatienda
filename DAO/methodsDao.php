<?php

include '../utils/conexion.php';
// $tipo_mueble = $_REQUEST['tm'];

class MetodosDAO {
    public function ListarProductos(){
        $cnx = new ConexionDB();
        $cn = $cnx->getConexion();

        $res = $cn->prepare("select * from inventario");
        $res->execute();
        
        foreach ($res as $row) {
            $lista[] = $row;
        }
        return $lista;
    }
    public function ListarProductosCod($cod){
        $cnx = new ConexionDB();
        $cn = $cnx->getConexion();
        $res = $cn->prepare("SELECT * FROM inventario WHERE Referencia = '$cod'");  // En MYSql al hacer referencia 
        // a una variable, siempre hay que ponerla entre comillas, si no, el programa da error.
        $res->execute();
        
        foreach ($res as $row) {
            $lista = $row;  // no lo guardamos en lista[] para que de esta manera no tengamos un array dentro de otro
        }
        return $lista;
    }
    public function ListarProductosName($name){
        $cnx = new ConexionDB();
        $cn = $cnx->getConexion();
        $res = $cn->prepare("SELECT * FROM inventario WHERE CLASIFICACION = '$name'");
        $res->execute();
        
        foreach ($res as $row) {
            $lista[] = $row;
        }
        return $lista;
    }
    
    
}

?>