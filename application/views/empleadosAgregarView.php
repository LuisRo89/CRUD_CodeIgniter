<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="offset-4 col-4">
    <h1>Agregar un Nuevo Registro</h1>
        <form action="./anadir" require class="form-group" method="post">
        <label>Badge:</label>
        <input class="form-control" require type="text" name="Badge" id="Badge" placeholder="Badge"><br>
        <label>DUI:</label>
        <input class="form-control" require type="text" name="DUI" id="DUI" placeholder="DUI"><br>
        <label>Nombres:</label>
        <input class="form-control" require type="text" name="Nombres" id="Nombres" placeholder="Nombres"><br>
        <label>Apellidos:</label>
        <input class="form-control" require type="text" name="Apellidos" id="Apellidos" placeholder="Apellidos"><br><br>
        <input type="submit" name="submit" value="Agregar" class="btn btn-outline-info">
        <a href="./index" class="btn btn-outline-danger">Volver</a>
        </form>
    </div>
</body>
</html>