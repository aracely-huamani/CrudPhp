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
    $id=$_REQUEST['idpaciente'];

    $sql ="SELECT * FROM paciente WHERE idpaciente=$id";
    $resultado = $conexion->query($sql);

    $Fila = $resultado->fetch_assoc();

    ?>
    <div class="container">
        <br>
        <h1>Modificar paciente</h1><br>
    
    <form action="editar1.php?idEditar=<?php echo $Fila["idpaciente"]?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="apellidopr" value="<?php echo $Fila['apellidos']?>">
        
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombres</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nombrepr" value="<?php echo $Fila['nombres']?>">
        
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Sexo</label>
            <input type="text" class="form-control" name="sexopr" value="<?php echo $Fila['sexo']?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Especialidad</label><br>
            <select name="especialidadpr" id="lang" value="<?php echo $Fila['especialidad']?>">
                  <option value="Medicina general">Medicina general</option>
                  <option value="Ginecologia">Ginecologia</option>
                  <option value="Obstetricia">Obstetricia</option>
                  <option value="Pediatria">Pediatria</option>
                  <option value="Cardiologia">Cardiologia</option>
                  <option value="Traumatologia">Traumatologia</option>
                  <option value="Oftamologia">Oftamologia</option>
                  <option value="Neumologia">Neumologia</option>
            </select>
        </div>
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