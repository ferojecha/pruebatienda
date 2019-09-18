<?php

class ConexionDB {
    public function getConexion (){
        try {
            $cnx = new PDO("mysql:host=localhost;dbname=tienda","root","");
            $cnx->exec("SET CHARACTER SET utf8");
            return $cnx;
        } catch (Exception $e) {
            die('Error: ' . $e->GetMessage());
        }
        finally{
            $cnx = null;
        }
        
    }
}
?>