<?php





?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1>Formulario </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="" method="post">
                    <div class="pb-3">
                        <label for="txtUsuario">Usuario</label>
                        <input type="text" name="txtUsuario" id="txtUsuario" required class="form-control">
                    </div>
                    <div>
                        <label for="txtClave">Clave</label>
                        <input type="password" name="txtClave" id="txtClave" required class="form-control">
                    </div>
                    <div>
                        <button class="btn btn-primary mt-3" name="btnEnviar" type="submit" id="btnEnviar">Enviar</button>
                    </div>
                </form>
            </div>
        </div>

    </main>
</body>
</html>