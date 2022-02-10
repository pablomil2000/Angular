<?php
    if (!isset($_GET['id'])) {
        header('Location:index.html');
    }

    require_once('index.html');
    $id = $_GET['id'];
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "bd_neptuno";
    $dsn = "mysql:host=$host;dbname=$dbname";
    $c = new PDO($dsn, $user, $password);

    $sql = "SELECT * FROM productos WHERE id LIKE '$id' Limit 1";
    // echo $sql;
    $sentencia = $c->query($sql);

    $res = $sentencia->fetchAll();
    // var_dump($res);

    ?>
    <div class="container">
        <p><b>Id: </b><?=$res[0]['id']?></p>
        <p><b>Nombre: </b><?=$res[0]['producto']?></p>
        <p><b>cantidad_por_unidad: </b><?=$res[0]['cantidad_por_unidad']?></p>
        <p><b>precio_unidad: </b><?=$res[0]['precio_unidad']?></p>
        <p><b>Stock: </b><?=$res[0]['unidades_existencia']?></p>
    </div>