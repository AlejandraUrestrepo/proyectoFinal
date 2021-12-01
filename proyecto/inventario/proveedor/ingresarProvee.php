<?php 
include("../../php/conexion.php");
include("../../php/proveedor.php");

$conect = new Conexion();
$prov = new proveedor();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/estilos.css">
    <title>registrar Producto</title>
 
</head>
<body>


<center>
    <form action="procesoIngresar.php" method="POST">
        <br><br><br><h2>Proveedor</h2>    
        <label for="">Nombre</label><br>   
        <input type="text" name="nombre" placeholder=""><br><br>
    
        <label for=""> Telefono</label><br>
        <input type="text" name="tel"><br><br>

        <label for="">Correo</label><br>
        <input type="email" name="correo"><br><br>

        <label for="">Direccion</label><br>
        <input type="text" name="direc"><br><br>


    
    <input type="submit">

</form>


</body>
</html>