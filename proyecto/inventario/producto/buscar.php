<?php 
include "../../php/productos.php";

include "../../php/conexion.php";

$producto = new productos();
$con = new Conexion();


$consul = $producto->readProducto();

$resultado = $con->Mostrar($consul);

$busqueda = $_GET['buscar'];
$consulta = $producto ->busqueda($busqueda);

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
</div>
<form action="buscar.php" method="get">

<input type="text" name="buscar" id="buscar" placeholder="buscar" >
<input type="submit" value="buscar"> 
</form>

<table class="table table-hover table-dark">
   
   
        <tr>
    <td>Codigo del producto</td>
    <td>Nombre del producto</td>
    <td>Precio de entrada</td>
    <td>Precio de Cajas</td>
    <td>Precio de Blisters</td>
    <td>Precio de Unidades</td>
    <td>Concentracion</td>
    <td>Tipo Id</td>
    <td>LaboratorioID</td>
    <td>PresentacionID</td>
    <td>Operacion</td>
    </tr>
 
    
    <?php 
  
 
    While ($row=Mysqli_fetch_assoc($resultado)){
    ?>
    <tr>
    <td> <?php echo $row["Codigo_Producto"];  ?> </td>
    <td> <?php echo $row["Nombre_Producto"];  ?></td>
    <td> <?php echo $row["Precio_Entrada"];  ?></td>
    <td> <?php echo $row["Precio_Caja"];  ?></td>
    <td> <?php echo $row["Precio_Blister"];  ?></td>
    <td> <?php echo $row["Precio_unidad"];  ?></td>
    <td> <?php echo $row["concentracion"];  ?></td>
    <td> <?php echo $row["TipoID"];  ?></td>
    <td> <?php echo $row["LaboratorioID"];  ?></td>
    <td> <?php echo $row["PresentacionID"];  ?></td>
    <td> <a href="actualizarP.php?id=<?php echo $row["Codigo_Producto"];  ?>"> Editar</a>|
    <a href="procesoEliminar.php?id=<?php echo $row["Codigo_Producto"];  ?>" class="eliminar"> Eliminar</a>|</td>

    
    </tr>
    <?php 
    
    
    } mysqli_free_result($resultado);
    ?>
    
    </table> 



    </div>
</body>
</html>