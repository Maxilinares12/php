<!DOCTYPE html>
<html lang="en">
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
            <div class="col-12 text-center py-5">
                <h1>Formulario de datos personales</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="resultado.php" method="post">
                    <div class="pb-3">
                        <label for="txtNombre">Nombre</label>
                        <input type="text" name="txtNombre" id="txtNombre" required class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="txtDni">Dni</label>
                        <input type="text" name="txtDni" id="txtDni" required class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="txtTelefono">Telefono</label>
                        <input type="text" name="txtTelefono" id="txtTelefono" required class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="txtEdad">Edad</label>
                        <input type="number" name="txtEdad" id="txtEdad" required class="form-control">
                    </div>
                    <div>
                        <button class="btn btn-primary mt-2" name="btnEnviar" id="btnEnviar" type="submit">Enviar    </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    
</body>
</html>