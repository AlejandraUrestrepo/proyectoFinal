<?php 
include "../../php/productos.php";

include "../../php/conexion.php";

$producto = new productos();
$con = new Conexion();


$consul = $producto->readProducto();

$resultado = $con->Mostrar($consul);


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

<form action="ingresarproductos.php">
<input type="submit" value="Registrar producto">
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
    <td><?php        
$sqlTipo = "SELECT `Nombre_Tipo` FROM `tipo` WHERE `ID_Tipo`=$row[TipoID];";            

$queryTipo = $con->login($sqlTipo);
                        

$result_Tipo = mysqli_num_rows($queryTipo);

?>
    
      <?php
            if($result_Tipo > 0){

while ($Tipo = mysqli_fetch_array($queryTipo)){
    

?>

 <?php echo $Tipo["Nombre_Tipo"];?>

 <?php
            }}
            ?>

</td>
    <td><?php        
$sqlLab = "SELECT `Nombre_Laboratorio` FROM `laboratorio` WHERE `ID_Laboratorio`=$row[LaboratorioID];";            

$queryLab = $con->login($sqlLab);
                        

$result_Lab = mysqli_num_rows($queryLab);

?>
    
      <?php
            if($result_Lab > 0){

while ($Lab = mysqli_fetch_array($queryLab)){
    

?>

 <?php echo $Lab["Nombre_Laboratorio"];?>



<?php
            }}
            ?></td>
    <td> <?php        
$sqlPresent = "SELECT `Nombre_Presentacion` FROM `presentacion` WHERE `ID_Presentacion`=$row[PresentacionID];";            

$queryPresent = $con->login($sqlPresent);
                        

$result_presentacion = mysqli_num_rows($queryPresent);

?>
    
      <?php
            if($result_presentacion > 0){

while ($presentacion = mysqli_fetch_array($queryPresent)){
    

?>

 <?php echo $presentacion["Nombre_Presentacion"];?>



<?php
            }}
            ?></td>
    <td> <a href="actualizarP.php? id=<?php echo $row["Codigo_Producto"];  ?>"> Editar</a>|
    <a href="procesoEliminar.php? id=<?php echo $row["Codigo_Producto"];  ?>" class="eliminar"> Eliminar</a>|</td>

    
    </tr>
    <?php 
    
    
 } mysqli_free_result($resultado);
    ?>
    
    </table> 

</div>

</body>
</html>