<?php
    include "Config/conexion.php";

    $id=$_REQUEST['id'];
    $sql= "DELETE FROM producto WHERE id = $id";

    $resultado = $conexion -> query($sql);

    if($resultado){
        header("Location: index.php");
    } else {
        echo "No se elimino el producto";
    }