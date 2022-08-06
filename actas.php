<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function promediar ($aNotas){
    $sumaTotal = 0;

    foreach ($aNotas as $nota){
        $sumaTotal += $nota;
    }
    $promedio = $sumaTotal / count($aNotas);
    return $promedio;
}






$aAlumnos = array();
 $aAlumnos[]= array("nombre" => "Ana Valle", "notas" => array(8, 9));
 $aAlumnos[]= array(
    "nombre" => "David",
    "notas" => array(7, 9)
 );
 $aAlumnos[]= array(
    "nombre" => "Valle",
    "notas" => array(8, 4)
 );
 $aAlumnos[]= array(
    "nombre" => "Ana",
    "notas" => array(6, 7)
 );



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
            <div class="col-12 text-center py-5">
                <h1>Actas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>Alumno</th>
                            <th>Nota 1</th>
                            <th>Nota 2</th>
                            <th>Promedio</th>
                        </tr>
                    <tbody>
                        <tr>
                            <?php foreach ($aAlumnos as $alumno) : ?>
                            <td> <?php echo $alumno["nombre"]; ?></td>
                            <td> <?php echo $alumno["notas"][0];?></td>
                            <td> <?php echo $alumno["notas"][1];?></td>
                            <td> <?php echo promediar ($alumno["notas"]) ;?></td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                    </thead>

                </table>
                <div class="row">
                    <div class="col-12">
                        <p> <?php echo ($promedio); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>