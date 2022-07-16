<?php
$aPacientes = array();
$aPacientes[] = array(
    "dni" => "33.765.012",
    "nombre" => "Ana Acuña",
    "edad" => 45,
    "peso" => 81.50,
);
$aPacientes[] = array(
    "dni" => "30.465.012",
    "nombre" => "Juan paz",
    "edad" => 28,
    "peso" => 88.50,
);
$aPacientes[] = array(
    "dni" => "39.265.017",
    "nombre" => "Pedro Pazcal",
    "edad" => 26,
    "peso" => 61.70,
);
$aPacientes[] = array(
    "dni" => "35.165.712",
    "nombre" => "Leonel Perez",
    "edad" => 30,
    "peso" => 75.50,
);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<main class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center pb-5 pt-4">Listado de pacientes</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-hover border">
                <thead>
                    <th>DNI</th>
                    <th>Nombre y apellido</th>
                    <th>Edad</th>
                    <th>Peso</th>   
                </thead>
                <tbody>
                    <?php foreach($aPacientes as $paciente){ ?>
                    <tr>
                        <td><?php echo $paciente["dni"]; ?></td>
                        <td><?php echo $paciente["nombre"]; ?></td>
                        <td><?php echo $paciente["edad"]; ?></td>
                        <td><?php echo $paciente["peso"]; ?></td>
                       
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
    
</body>
</html>