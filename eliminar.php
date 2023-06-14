<?php
    include "Config/conexion.php";

    $id=$_REQUEST['idpaciente'];
    $sql= "DELETE FROM paciente WHERE idpaciente = $id";

    $resultado = $conexion -> query($sql);

    if($resultado){
        header("Location: index.php");
    } else {
        echo "No se elimino el producto";
    }