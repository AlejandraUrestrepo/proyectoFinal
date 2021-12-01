<?php 
include("../../php/proveedor.php");

include "../../php/conexion.php";

$prov = new proveedor();
$con = new Conexion();


$consul = $prov->readProveedor();

$resultado = $con->Mostrar($consul);

$busqueda = $_GET['buscar'];
$consulta = $prov ->busqueda($busqueda);

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


<form action="buscar.php" method="get">

<input type="text" name="buscar" id="buscar" placeholder="buscar" >
<input type="submit" value="buscar"> 
</form>

<table class="table  table-dark">
   
   
          
<tr>
    
    <td>Nit proveedor</td>
    <td>Nombre proveedor</td>
    <td>Telefono</td>
    <td>Correo</td>
    <td>Dirrecion</td>
    <td>Operacion</td>
    </tr>
 

    <?php 
    
 
    While ($row=Mysqli_fetch_assoc($resultado)){
    ?>
    <tr>
    <td> <?php echo $row["NiT_provedor"];  ?></td>
    <td> <?php echo $row["Nombre"];  ?></td>
    <td> <?php echo $row["Telefono"];   ?></td>
    <td> <?php echo $row["Correo"];  ?></td>
    <td> <?php echo $row["Dirrecion"];  ?></td>
    <td> <a href="actualizarProvee.php? id=<?php echo $row["NiT_provedor"];  ?>"> Editar</a>|
    <a href="procesoEliminar.php?id=<?php echo $row["NiT_provedor"];  ?>" class="eliminar"> Eliminar</a>|</td>
    </tr>
    <?php 
  
    
    } mysqli_free_result($resultado);
    ?>
    
    </table> 



    </div>
    </center>
</body>
</html>