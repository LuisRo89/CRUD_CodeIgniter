<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php
    if($this->session->flashdata('correcto'))
    echo '<h5>'.$this->session->flashdata('correcto').'</h5>';
    if($this->session->flashdata('incorrecto'))
    echo '<h5>'.$this->session->flashdata('incorrecto').'</h5>';
    ?>
</head>
<body>
    <div>
        <div class="offset-2 col-8">
            <h1 class="offset-3">Lista de Empleados</h1>
            <table class="table">
                <thead class="thead-dark" >
                <tr>
                    <td>Correlativo</td>
                    <td>Badge</td>
                    <td>DUI</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>Acciones</td>
                </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($listar as $item) {
                        echo '<tr><td>'.$item->id.'</td>'
                             .'<td>'.$item->Badge.'</td>'
                             .'<td>'.$item->DUI.'</td>'
                             .'<td>'.$item->Nombres.'</td>'
                             .'<td>'.$item->Apellidos.'</td>'.
                             '<td>'?> 

                             <a href="./modify?id=<?=$item->id?>&Badge=<?=$item->Badge?>&DUI=<?=$item->DUI?>&Nombres=<?=$item->Nombres?>&Apellidos=<?=$item->Apellidos?>" class="btn btn-warning">Editar </a> &nbsp
                             <a href="./borrar?id=<?=$item->id?>&Nombres=<?=$item->Nombres?>&Apellidos=<?=$item->Apellidos?>" class="btn btn-danger">Eliminar</a>
                             </td>
                         </tr>  

                    <?php       
                    }
                    ?>
                </tbody>
            </table>
            <hr>
            <a class="btn btn-outline-primary" href="./add">Añadir un Nuevo Registro</a>
        </div>        
    </div>
</body>
</html>