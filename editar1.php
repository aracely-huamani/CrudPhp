<?php

include "Config/conexion.php";

$idpaciente = $_REQUEST['idEditar'];

$apellido = $_POST['apellidopr'];
$nombre = $_POST['nombrepr'];
$sexo = $_POST['sexopr'];
$especialidad = $_POST['especialidadpr'];
$imagen=addslashes(file_get_contents($_FILES['imagenpr']['tmp_name']));

$sql = "UPDATE paciente SET
apellidos='$apellido',
nombres = '$nombre',
sexo='$sexo',
especialidad='$especialidad',
imagen = '$imagen' WHERE idpaciente = $idpaciente";

$resultado = $conexion->query($sql);

if ($resultado) {
    header('Location: index.php');
}else{
    echo "No se modifico el producto";
}
