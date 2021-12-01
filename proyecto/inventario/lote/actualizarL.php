<?php 
include "../../php/lote.php";

include "../../php/conexion.php";

$lot = new lote();
$con = new Conexion();

$id = $_GET['id'];
$consul = $lot->consultarLote($id);

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
    
    <td>Id lote</td>
    <td>Fecha vencimiento</td>
    <td>ID proveedor</td>
    <td>Stock</td>
    <td>Codigo Producto</td>
    <td>Operacion</td>
    </tr>
 

    <?php 
    
 
    While ($row=Mysqli_fetch_assoc($resultado)){
    ?>
    <tr>
    <td> <input type="text" value="<?php echo $row["ID_Lote"];  ?>" name="ID_Lote"> </td>
    <td> <input type="date" value="<?php echo $row["Fecha_vencimiento"];  ?>" name="Fecha_vencimiento"> </td>
    <td> <input type="text" value="<?php echo $row["provedorID"];  ?>" name="provedorID"> </td>                               
    <td> <input type="text" value="<?php echo $row["Stock"];  ?>" name="Stock"></td>
    <td> <input type="text" value="<?php echo $row["IdProducto"];  ?>" name="codigoP"></td>
    <td> <input type="submit" value="Actualizar" name="actualizar"></td>
    
    
    </tr>
    </form>






   
    <?php 
    
    } mysqli_free_result($resultado);
    ?>
    
    </table> 

    <a href="ingresarlote.php"> Ver lotes</a>

</body>
</html>