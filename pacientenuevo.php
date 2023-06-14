<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <br>
        <h1>Nuevo paciente</h1>
        <br>
    
    <form action="agregarpaciente.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="apellidos">
        
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nombres</label>
            <input type="text" class="form-control" name="nombres">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Sexo</label>
            <input type="text" class="form-control" name="sexo">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Especialidad</label>
            <select name="especialidad" id="lang">
                  <option value="mgeneral">Medicina general</option>
                  <option value="ginecologia">Ginecologia</option>
                  <option value="obstetricia">Obstetricia</option>
                  <option value="pediatria">Pediatria</option>
                  <option value="cardiologia">Cardiologia</option>
                  <option value="traumatologia">Traumatologia</option>
                  <option value="oftamologia">Oftamologia</option>
                  <option value="neumologia">Neumologia</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Foto</label>
            <input type="file" class="form-control" name="imagen">
        </div>
        
        <button type="submit" class="btn btn-info">Enviar</button>
        <a href="index.php" class="btn btn-warning">Regresar </a>
    </form>
    </div>  




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>