<?php
    include "config/conexion.php";

    $nombrepr = $_POST["nombre"];
    $descripcionpr = $_POST["descripcion"];
    $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $sql = " INSERT INTO producto (nombre,descripcion,imagen) VALUES ('$nombrepr','$descripcionpr','$imagen')";

    $resultado = $conexion->query($sql);

    if ($resultado) {
        header('Location: index.php');
        echo "Producto agregado";
    } else {
        echo "No se agrego producto";
    }