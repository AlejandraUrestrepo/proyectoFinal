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
<?php  include "../../header.php"?>
<form action="buscar.php" method="get">

<input type="text" name="buscar" id="buscar" placeholder="buscar" >
<input type="submit" value="buscar"> 
</form>
<table class="table table-hover table-dark">
   
   
        <tr>
    
    <td>Id lote</td>
    <td>Fecha vencimiento</td>
    <td>ID proveedor</td>
    <td>Stock</td>
    <td>Id producto</td>
    <td>Operacion</td>
    </tr>
 
    
    <?php 
    
$consul = $prov->readProveedor();

$resultado = $conect->Mostrar($consul);
 
    While ($row=Mysqli_fetch_assoc($resultado)){
    ?>
    <tr>
   
    <td> <?php echo $row["NiT_provedor"];  ?></td>
    <td> <?php echo $row["Nombre"];  ?></td>
    <td> <?php echo $row["Telefono"];   ?></td>
    <td> <?php echo $row["Correo"];  ?></td>
    <td> <?php echo $row["Dirrecion"];  ?></td>
    <td> <a href="actualizarProvee.php? id=<?php echo $row["NiT_provedor"] ?>"> Editar</a>|
    <a href="procesoEliminar.php?id=<?php echo $row["NiT_provedor"]  ?>" class="eliminar"> Eliminar</a>|</td>

    
    </tr> 
    </center>
    <?php 
    
    } mysqli_free_result($resultado);
    ?>
    </body>
</html>