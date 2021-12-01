<?php 
include("../../php/conexion.php");
include("../../php/cliente.php");

$conect = new Conexion();
$client = new cliente();

$consul = $client->readBarrio();

$resultado = $conect->Mostrar($consul);






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
<form action="buscarBarrios.php" method="get">

<input type="text" name="buscar" id="buscar" placeholder="buscar" >
<input type="submit" value="buscar"> 
</form>

<table class="table table-hover table-dark">
   
   
        <tr>
    
    <td>ID</td>
    <td>Nombre</td>
    <td>Comuna</td>
    <td>Ciudad</td>

    </tr>
 
    
    <?php 
    

 
    While ($row=Mysqli_fetch_assoc($resultado)){
    ?>
    <tr>
   
    <td> <?php echo $row["ID_Barrio"];  ?></td>
    <td> <?php echo $row["Nombre_barrio"];  ?></td>
    <td> <?php echo $row["Comuna"];  ?></td>
    <td><?php        
$sql = "SELECT `Nombre_ciudad` FROM `ciudad` WHERE `ID_ciudad`=$row[idCiudad];";            

$query = $conect->login($sql);
                        

$result = mysqli_num_rows($query);

?>
    
      <?php
            if($result > 0){

while ($presentacion = mysqli_fetch_array($query)){
    

?>

 <?php echo $presentacion["Nombre_ciudad"];?>



<?php
            }}
            ?></td>

    
    </tr> 
    </center>
    <?php 
    
    } mysqli_free_result($resultado);
    ?>