<?php
session_start();

if (isset($_SESSION["listadoClientes"])){
    $aClientes = $_SESSION["listadoClientes"];
} else{
    $aClientes = array();
}



if ($_POST){


    $nombre = $_POST["txtNombre"];
    $dni = $_POST["txtDni"];
    $telefono = $_POST["txtTelefono"];
    $edad = $_POST["txtEdad"];

    $aClientes[] = array("nombre" => $nombre,
                        "dni" => $dni,
                        "telefono" => $telefono,
                        "edad" => $edad
    );
    $_SESSION["listadoClientes"] = $aClientes;
}





?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center my-3">
                <h1>Listado de clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <form action="" method="POST" class="form">
                    <div class="pb-3">
                        <label for="txtNombre">Nombre:</label>
                        <input type="text" name="txtNombre" class="form-control" placeholder="Ingrese nombre y apellido">
                    </div>
                    <div class="pb-3">
                        <label for="txtDni">Dni:</label>
                        <input type="text" name="txtDni" class="form-control" placeholder="1111111">
                    </div>
                    <div class="pb-3">
                        <label for="txtTelefono">Telefono:</label>
                        <input type="text" name="txtTelefono" class="form-control" placeholder="11111111">
                    </div>
                    <div class="pb-3">
                        <label for="txtEdad">Edad:</label>
                        <input type="text" name="txtEdad" class="form-control" placeholder="99">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3" name="btnEnviar">Enviar</button> <button type="submit" class="btn btn-danger mt-3" name="btnEliminar">Eliminar</button>
                </form>
            </div>
            <div class="col-6 ms-5">
                <table class="table table-hover border shadow">
                    <thead>
                        <tr>
                            <th>Nombre:</th>
                            <th>DNI:</th>
                            <th>Telefono:</th>
                            <th>Edad:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aClientes as $cliente): ?>
                        <tr>
                            <td><?php echo $cliente["nombre"]; ?></td>
                            <td><?php echo $cliente["dni"]; ?></td>
                            <td><?php echo $cliente["telefono"]; ?></td>
                            <td><?php echo $cliente["edad"]; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>