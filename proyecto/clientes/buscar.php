<?php 
include("../php/conexion.php");
include("../php/cliente.php");

$conect = new Conexion();
$client = new cliente();

$consul = $client->readCliente();

$resultado = $conect->Mostrar($consul);

$busqueda = $_GET['buscar'];
$consulta = $client ->busqueda($busqueda);

$resultado = $conect ->buscar($consulta)

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../css/estilos.css">
    
    <link rel="stylesheet" href="../../css/fontello.css">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href = "https://fonts.googleapis.com/css2? family = Roboto: wght @ 100 & display = swap" rel = "estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<br><br>
<form action="buscar.php" method="get">

<input type="text" name="buscar" id="buscar" placeholder="buscar" >
<input type="submit" value="buscar"> 
</form>

<table class="table  table-dark">
   
   
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
    <?php 
  
    
    } mysqli_free_result($resultado);
    ?>
    
    </table> 



    </div>
    </center>
</body>
</html>