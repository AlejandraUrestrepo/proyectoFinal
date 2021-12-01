<?php 
include("../../php/proveedor.php");

include "../../php/conexion.php";

$prov = new proveedor();
$con = new Conexion();

$id = $_GET['id'];
$consul = $prov->consultarProveedor($id);

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
    
    <td>Nit proveedor</td>
    <td>Nombre s</td>
    <td>Telefono</td>
    <td>Correo/td>
    <td>Dirrecion</td>
    <td>Operacion</td>
    </tr>
 

    <?php 
    
 
    While ($row=Mysqli_fetch_assoc($resultado)){
    ?>
    <tr>
    <td> <input type="text" value="<?php echo $row["NiT_provedor"];  ?>" name="Nit_prove"> </td>
    <td> <input type="text" value="<?php echo $row["Nombre"];  ?>" name="nombre"> </td>
    <td> <input type="text" value="<?php echo $row["Telefono"];  ?>" name="tel"> </td>                               
    <td> <input type="text" value="<?php echo $row["Correo"];  ?>" name="correo"></td>
    <td> <input type="text" value="<?php echo $row["Dirrecion"];  ?>" name="direc"></td>
    <td> <input type="submit" value="Actualizar" name="actualizar"></td>
    
    
    </tr>
    </form>






   
    <?php 
    
    } mysqli_free_result($resultado);
    ?>
    
    </table> 

    <a href="ingresarProvee.php"> Ver Proveedores</a>

</body>
</html>