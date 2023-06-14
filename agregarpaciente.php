<?php
    //include "config/conexion.php";

    $apellidos = $_POST["apellidos"];
    $nombres = $_POST["nombres"];
    $sexo = $_POST["sexo"];
    $especialidad = $_POST["especialidad"];
    $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $sql = " INSERT INTO paciente (apellidos,nombres,sexo,especialidad,imagen) VALUES ('$apellidos','$nombres','$sexo','$especialidad','$imagen')";

    $resultado = $conexion->query($sql);

    if ($resultado) {
        header('Location: index.php');
        echo "Producto agregado";
    } else {
        echo "No se agrego producto";
    }