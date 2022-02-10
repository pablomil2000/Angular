<?php
class Conexion{
    static function conectar() {
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=libreria2','root','');    
            $conexion->query("SET NAMES 'utf8'");
            return $conexion;    
        }catch (PDOException $e){
            echo "No se ha podido establecer conexión con el servidor.<br />";
            die ("Error: ".$e->getMessage());   
        }
    }    
}