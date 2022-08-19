<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);





?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-6 py-3">
                <h1>Lista de invitados</h1>
                <p>Complete el siguiente formulario:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div>
                    <label for="txtDni" class="pb-3">Ingrese el DNI:</label>
                    <input type="text" name="txtDni" id="txtDni" class="form-control">
                    <button type="submit" class="btn btn-primary" name="btnProcesar" value="verificar invitado">Verificar invitado</button>
                </div>
                <div>
                    <label for="txtDni" class="pt-3 pb-3">Ingresa el codigo secreto para el pase VIP:</label>
                    <input type="text" name="txtDni" id="txtDni" class="form-control">
                    <button type="submit" class="btn btn-primary" name="btnVip" value="verificar codigo">Verificar codigo</button>
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>