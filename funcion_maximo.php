<?php
function maximo($aVector){
    $valorMaximo = 0;
    foreach ($aVector as $valor) {
        if ($valorMaximo < $valor){
            $valorMaximo = $valor;
        }
    }

    return  $valorMaximo;
}

$aNotas = array(8, 5, 4, 9, 3, 1);
$aSueldo = array (800.30, 400.87, 500.45, 900.70, 100, 900, 1800);

echo "La nota maxima es: " . maximo ($aNotas) . "<br>";
echo "El sueldo maximo es: " . maximo ($aSueldo);
?>