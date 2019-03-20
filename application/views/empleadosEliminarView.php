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
        <h2>En verdad desea eliminar el Registro: <?=$_GET['id']?>, con nombre: <?= $_GET['Nombres']?> ?</h2>
        <form action="./delete" method="post">
        <input type="hidden" value="<?=$_GET['id']?>" name="id">

        <input type="submit" name="submit" value="Eliminar" class="btn btn-outline-success"><br>
        </form>
        <br><a href="./index" class="btn btn-outline-danger">Volver</a>
</body>
</html>