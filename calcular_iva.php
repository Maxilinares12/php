<?php
$iva = 21;
$precioSinIva = 0;
$precioConIva = 0;
$ivaCantidad = 0;

if($_POST){
    $iva = $_POST ["lstIva"];
    $precioSinIva = ($_POST["txtPrecioSinIva"]) > 0? $_POST["txtPrecioSinIva"]: 0;
    $precioConIva = ($_POST["txtPrecioConIva"]) > 0? $_POST["txtPrecioConIva"]: 0;
    $ivaCantidad = $precioConIva - $precioSinIva;

    if($precioSinIva > 0){
        $precioConIva = $precioSinIva / (21 /100 +1);

    }
    if($precioConIva > 0) {
        $precioSinIva = $precioConIva * (21 / 100 + 1);
    } 

}

?>


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
                <h1>Calculadora de IVA</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form method="post">
                    <div>  
                        <label for="">IVA</label>
                            <select name="lstIva" id="lstIva">
                                <option value="10.5">10.5</option>
                                <option value="19">19</option>
                                <option value="21" selected>21</option>
                                <option value="27">27</option>
                            </select>
                        </div>  
                        <div class="pb-3 mt-3">
                            <label for="">Precio sin IVA:</label>
                            <input type="text" name="txtPrecioSinIva" id="txtPrecioSinIva" class="form-control" >
                        </div>
                        <div class="pb-3">
                            <label for="">Precio con IVA</label>
                            <input type="text" name="txtPrecioConIva" id="txtPrecioConIva" class="form-control">
                        </div>
                        <button class="btn btn-primary mt-2" type="submit">Calcular</button>
                </form>
            </div>
            <div class="col-6">
                <table class="table table-hover border">
                    <tr>
                        <th>IVA:</th>
                        <td><?php echo $iva; ?>%</td>
                    </tr>
                    <tr>
                        <th>Precio sin IVA:</th>
                        <td> <?php echo number_format($precioSinIva, 2, ".", "," ); ?></td>
                    </tr>
                    <tr>
                        <th>Precio con IVA:</th>
                        <td><?php echo number_format($precioConIva, 2, "." , ","); ?></td>
                    </tr>
                    <tr>
                        <th>IVA cantidad:</th>
                        <td><?php echo number_format($ivaCantidad, 2, ".", ",");?></td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
    
</body>
</html>