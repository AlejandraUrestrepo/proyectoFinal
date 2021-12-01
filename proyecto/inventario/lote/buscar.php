<?php 
include "../../php/lote.php";

include "../../php/conexion.php";

$lot = new lote();
$con = new Conexion();


$consul = $lot->readLote();

$resultado = $con->Mostrar($consul);

$busqueda = $_GET['buscar'];
$consulta = $lot ->busqueda($busqueda);

$resultado = $con ->buscar($consulta)

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

<br><br>
<form action="buscar.php" method="get">

<input type="text" name="buscar" id="buscar" placeholder="buscar" >
<input type="submit" value="buscar"> 
</form>

<table class="table  table-dark">
   
   
        <tr>
    
    <td>Id lote</td>
    <td>Fecha vencimiento</td>
    <td>ID proveedor</td>
    <td>Id producto</td>
    <td>Stock</td>
    <td>Operacion</td>
    </tr>
 
    
    <?php 
   
 
    While ($row=Mysqli_fetch_assoc($resultado)){
    ?>
    <tr>
   
    <td> <?php echo $row["ID_Lote"];  ?></td>
    <td> <?php echo $row["Fecha_vencimiento"];  ?></td>
    <td> <?php echo $row["provedorID"];  ?></td>
    <td> <?php echo $row["IdProducto"];  ?></td>
    <td> <?php echo $row["Stock"];  ?></td>
    <td> <a href="actualizarL.php?id=<?php echo $row["ID_Lote"];  ?>"> Editar</a>|
    <a href="procesoEliminar.php?id=<?php echo $row["ID_Lote"];  ?>" class="eliminar"> Eliminar</a>|</td>

    
    </tr> 
    <?php 
  
    
    } mysqli_free_result($resultado);
    ?>
    
    </table> 



    </div>
    </center>
</body>
</html>