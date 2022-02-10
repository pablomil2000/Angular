<?php
include_once('conexion.php');
$conexion = Conexion::conectar();

$buscar = $_GET['buscar'];

$consulta = "SELECT id from marcas where nombre like '$buscar'";
// var_dump($consulta);

$query = $conexion->query($consulta);
$resultado = $query->fetchAll();
// var_dump($resultado[0]['id']);

$cadena = "";

if ($resultado):
    $marca = intval($resultado[0]['id']);

    $consulta2 = "SELECT * from modelos where id_marca = ".$marca;
    // echo $consulta2;

    $query2 = $conexion->query($consulta2);
    $resultado2 = $query2->fetchAll();
    // var_dump($resultado2);

    $cadena .= '<p style="color: grey">Resultados para la marca "'.$buscar.'": '.count($resultado2).'</p><ul>';
    if ($resultado2){
        foreach ($resultado2 as $key => $value) {
            $cadena .= "<hr>";
            $cadena .= '<li>'.$value['nombre_m'].'</li>';
            $cadena .= "<hr>";
        }
    }else{
        $cadena .= '<li>No hay ningún modelo para la marca introducida</li>';
    }
    $cadena .= '</ul>';
else:
    $cadena .= '<li>No hay ningún modelo para la marca introducida</li>';
endif;

echo $cadena;