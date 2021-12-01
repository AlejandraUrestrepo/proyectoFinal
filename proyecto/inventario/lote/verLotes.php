<?php
include("../../php/conexion.php");
include("../../php/lote.php");

$conect = new Conexion();
$lot = new lote();
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/estilos.css">
    <title>registrar Producto</title>
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
    
$consul = $lot->readLote();

$resultado = $conect->Mostrar($consul);
 
    While ($row=Mysqli_fetch_assoc($resultado)){
    ?>
    <tr>
   
    <td> <?php echo $row["ID_Lote"];  ?></td>
    <td> <?php echo $row["Fecha_vencimiento"];  ?></td>
    <td> <?php echo $row["provedorID"];  ?></td>
    <td> <?php echo $row["Stock"];  ?></td>
    <td> <?php echo $row["IdProducto"];  ?></td>
    <td> <a href="actualizarL.php? id=<?php echo $row["ID_Lote"];  ?>"> Editar</a>|
    <a href="procesoEliminar.php?id=<?php echo $row["ID_Lote"];  ?>" class="eliminar"> Eliminar</a>|</td>

    
    </tr> 
    </center>
    <?php 
    
    } mysqli_free_result($resultado);
    ?>
    </body>
</html>