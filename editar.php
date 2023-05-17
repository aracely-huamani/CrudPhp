<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <?php

    include "Config/conexion.php";
    $id=$_REQUEST['id'];

    $sql ="SELECT * FROM producto WHERE id=$id";
    $resultado = $conexion->query($sql);

    $Fila = $resultado->fetch_assoc();

    ?>
    <div class="container">
        <br>
        <h1>Modificar producto</h1>
    
    <form action="editar1.php?idEditar=<?php echo $Fila["id"]?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nombrepr" value="<?php echo $Fila['nombre']?>">
        
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcionpr" value="<?php echo $Fila['descripcion']?>">
        </div>

        <td style="background:#6a777;text-align:center;padding:15px"><img style= "width:150px ; height:150px;" src="data:image/jpg;base64,<?php echo base64_encode($Fila['imagen'])?>"  alt=""></td>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Imagen</label>
            <input type="file" class="form-control" name="imagenpr">
        </div>
        
        <button type="submit" class="btn btn-info">Enviar</button>
        <a href="index.php" class="btn btn-warning">Regresar </a>
    </form>
    </div>  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>