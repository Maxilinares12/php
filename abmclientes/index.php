<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if(file_exists("archivo.txt")){
    $jsonClientes = file_get_contents("archivo.txt");
    $aClientes= json_decode($jsonClientes, true);

} else{
    $aClientes = array();
}



$pos = isset($_GET["pos"]) && $_GET ["pos"] >= 0 ? $_GET ["pos"] : "";

if ($_POST){
    $documento = trim($_POST["txtDocumento"]); 
    $nombre = trim($_POST["txtNombre"]); 
    $telefono = trim($_POST["txtTelefono"]); 
    $correo = trim($_POST["txtCorreo"]); 

    

if($pos>=0){
    //actualizar
    $aClientes [$pos] = array("documento" => $documento,
                            "nombre" => $nombre, 
                            "telefono" => $telefono,
                            "correo" => $correo ,
                            "imagen" => $nombreImagen);
            }else {
                    if($_FILES["archivo"]["error"] === UPLOAD_ERR_OK){
                        $nombreAleatorio = date("Ymdhmsi"); //2021010420453710
                        $archivo_tmp = $_FILES["archivo"]["tmp_name"];
                        $extension = strtolower(pathinfo($_FILES["archivo"]["name"], PATHINFO_EXTENSION));
                        if($extension == "jpg" || $extension == "jpeg" || $extension == "png"){
                        $nombreImagen = "$nombreAleatorio.$extension";
                        move_uploaded_file($archivo_tmp, "imagenes/$nombreImagen");}
                            
            }
    //insertar
    $aClientes [] = array("documento" => $documento,
                            "nombre" => $nombre, 
                            "telefono" => $telefono,
                            "correo" => $correo );
}       


   $jsonClientes = json_encode($aClientes);

   file_put_contents("archivo.txt", $jsonClientes);

}

if (isset($_GET["do"]) && $_GET ["do"] == "eliminar"){

    unset($aClientes[$pos]);
    
    $jsonClientes = json_encode($aClientes);

    file_put_contents("archivo.txt", $jsonClientes);
    
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="div col-12 text-center py-5">
                <h1>Registro de clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="py-2">
                        <label for="txtDocumento">DNI:*</label>
                        <input type="text" name="txtDocumento" id="txtDocumento" class="form-control" required value="<?php echo isset($aClientes[$pos])? $aClientes [$pos] ["documento"]: ""; ?>">
                    </div>
                    <div class="py-2">
                        <label for="txtNombre">Nombre:*</label>
                        <input type="text" name="txtNombre" id="txtDni" class="form-control" required value="<?php echo isset($aClientes[$pos])? $aClientes [$pos] ["nombre"]: ""; ?>">
                    </div>
                    <div class="py-2">
                        <label for="txtTelefono">Telefono:*</label>
                        <input type="text" name="txtTelefono" id="txtTelefono" class="form-control" required value="<?php echo isset($aClientes[$pos])? $aClientes [$pos] ["telefono"]: ""; ?>">
                    </div>
                    <div>
                        <label for="txtCorreo">Correo:*</label>
                        <input type="text" name="txtCorreo" id="txtCorreo" class="form-control" required value="<?php echo isset($aClientes[$pos])? $aClientes [$pos] ["correo"]: ""; ?>">
                    </div>
                    <div class="py-2">
                        <label for="">Archivo adjunto</label>
                        <input type="file" name="archivo" id="archivo" accept=".jpg .jpeg .png">
                        <small class="d-block">Archivos admitidos: .jpg .jpeg .png</small>
                    </div>
                    <div class="py-2">
                        <button type="submit" class=" btn btn-primary" name="btnGuardar">Guardar</button>
                        <button type="submit" class="btn btn-danger" name="btnNuevo">Nuevo</button>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <table class="table table-hover shadow">
                    
                        <tr>
                            <th>Imagen</th>
                            <th>Dni</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                        <?php foreach ($aClientes as $pos => $cliente): ?>
                        <tr>
                            <td></td>
                            <td><?php echo $cliente["documento"]?></td>
                            <td><?php echo $cliente["nombre"]?></td>
                            <td><?php echo $cliente["correo"]?></td>
                            <td><a href="index.php?pos=<?php echo $pos; ?>&do=eliminar"><i class="bi bi-trash"></i></a> 
                                <a href="index.php?pos=<?php echo $pos; ?>&do=editar"><i class="bi bi-pencil-fill"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    
                </table>
            </div>
        </div>
    </main>
</body>
</html>