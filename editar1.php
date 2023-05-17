<?php

include "Config/conexion.php";

$id = $_REQUEST['idEditar'];

$nombre = $_POST['nombrepr'];
$descripcion = $_POST['descripcionpr'];
$imagen=addslashes(file_get_contents($_FILES['imagenpr']['tmp_name']));

$sql = "UPDATE producto SET
nombre= '$nombre',
descripcion = '$descripcion',
imagen = '$imagen' WHERE id = $id";

$resultado = $conexion->query($sql);

if ($resultado) {
    header('Location: index.php');
}else{
    echo "No se modifico el producto";
}
