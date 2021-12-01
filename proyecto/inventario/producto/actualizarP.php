<?php 
include "../../php/productos.php";

include "../../php/conexion.php";

$producto = new productos();
$con = new Conexion();

$id = $_GET['id'];
$consul = $producto->consultarProducto($id);

$resultado = $con->Mostrar($consul);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actualzar producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    



<form action="procesoActualizar.php" method="POST">
<table class="table table-hover">
   
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
    <td> <input type="text" value="<?php echo $row["Codigo_Producto"];  ?>" name="Codigo_Producto"> </td>
    <td> <input type="text" value="<?php echo $row["Nombre_Producto"];  ?>" name="Nombre_Producto"> </td>
    <td> <input type="text" value="<?php echo $row["Precio_Entrada"];  ?>" name="Precio_Entrada"></td>
    <td> <input type="text" value="<?php echo $row["Precio_Caja"];  ?>" name="Precio_Caja"></td>
    <td> <input type="text" value="<?php echo $row["Precio_Blister"];  ?>" name="Precio_Blister"></td>
    <td> <input type="text" value="<?php echo $row["Precio_unidad"];  ?>" name="Precio_Unidad"></td>
    <td> <input type="text" value="<?php echo $row["concentracion"];  ?>" name="concentracion"></td>
    <td> <input type="text" value="<?php echo $row["TipoID"];  ?>" name="tipoProducto"></td>
    <td> <input type="text" value="<?php echo $row["LaboratorioID"];  ?>" name="laboratorio"></td>
    <td> <input type="text" value="<?php echo $row["PresentacionID"];  ?>" name="presentacion"></td>
    <td> <input type="submit" value="Actualizar" name="actualizar"></td>
    
    
    </tr>
    </form>






   
    <?php 
    
    } mysqli_free_result($resultado);
    ?>
    
    </table> 

    <a href="inventario.php"> inventario</a>

</body>
</html>