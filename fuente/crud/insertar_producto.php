<?php
    include_once "../conexion_bd.php";

    echo $_POST["nombre"]
    echo $_POST["precio"]
    echo $_POST["categoria"]
    $sql = "INSERT INTO productos (nombre,precio,categoria_id VALUE"
    .$_POST["nombre"]. ", "
    .$_POST["precio"]. ", "
    .$_POST["categoria"]. "); "

?>