<?php
function contar($aArray){
    $contador = 0;
    foreach($aArray as $item){
        $contador++;
    }
    return $contador;

}
$aNotas = array(9, 8, 9.50, 4, 7, 8);

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

$aProductos = array();
$aProductos[] = array(
    "nombre" => "Smart Tv 55\" 4K UHD",
    "marca" => "samsung",
    "stock" => 60, 
    "precio" => 58000,
);
$aProductos[] = array(
    "nombre" => "Cafetera Oster",
    "marca" => "Oster",
    "stock" => 25, 
    "precio" => 10800,
);
$aProductos[] = array(
    "nombre" => "Estufa electrica de 4 velas",
    "marca" => "RDI",
    "stock" => 47, 
    "precio" => 5400,
);



echo "cantidad de productos:" . contar($aProductos);
echo "<br>Cantidad de pacientes:" . contar($aPacientes);
echo "<br>Cantidad de notas:" . contar($aNotas);
?>