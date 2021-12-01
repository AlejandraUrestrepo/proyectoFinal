<?php 
include("../php/conexion.php");
include("../php/cliente.php");

$conect = new Conexion();
$client = new cliente();

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>registrar Producto</title>
    </head>
<body>
<?php  include "../header.php"?>
<div>
<form action="buscar.php" method="get">

<input type="text" name="buscar" id="buscar" placeholder="buscar" >
<input type="submit" value="buscar"> 
</form>
        </div>
<table class="table table-hover table-dark">
   
   
        <tr>
    
    <td>Cedula</td>
    <td>Nombres</td>
    <td>Apellidos</td>
    <td>Direccion</td>
    <td>Telefono</td>
    <td>Barrio</td>
    <td>Operacion</td>
    </tr>
 
    
    <?php 
    
$consul = $client->readCliente();

$resultado = $conect->Mostrar($consul);
 
    While ($row=Mysqli_fetch_assoc($resultado)){
    ?>
    <tr>
   
    <td> <?php echo $row["Cedula_Cliente"];  ?></td>
    <td> <?php echo $row["Nombre"];  ?></td>
    <td> <?php echo $row["Apellidos"];  ?></td>
    <td> <?php echo $row["Direccion"];  ?></td>
    <td> <?php echo $row["Telefono"];  ?></td>
    <td><?php        
$sql = "SELECT `Nombre_barrio` FROM `barrio` WHERE `ID_Barrio`=$row[BarrioID];";            

$query = $conect->login($sql);
                        

$result = mysqli_num_rows($query);

?>
    
      <?php
            if($result > 0){

while ($presentacion = mysqli_fetch_array($query)){
    

?>

 <?php echo $presentacion["Nombre_barrio"];?>



<?php
            }}
            ?></td>
    <td> <a href="actualizarCliente.php? id=<?php echo $row["Cedula_Cliente"];  ?>"> Editar</a>|
    <a href="procesoEliminar.php?id=<?php echo $row["Cedula_Cliente"];  ?>" class="eliminar"> Eliminar</a>|</td>

    
    </tr> 
    </center>
    <?php 
    
    } mysqli_free_result($resultado);
    ?>
</body>
</html>