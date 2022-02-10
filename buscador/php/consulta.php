<?php

$busq=$_GET['buscar'];
// $busq='';
$host = "localhost";
$user = "root";
$password = "";
$dbname = "bd_neptuno";
$dsn = "mysql:host=$host;dbname=$dbname";
$c = new PDO($dsn, $user, $password);

$sql = "SELECT * FROM productos WHERE producto LIKE '%".$busq."%' Limit 7";
// echo $sql;
$sentencia = $c->query($sql);

$res = $sentencia->fetchAll();

if ($busq != '') {
    echo json_encode($res);
}else {
    echo json_encode('');
}