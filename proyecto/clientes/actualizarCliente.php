<?php 
include("../php/conexion.php");
include("../php/cliente.php");

$conect = new Conexion();
$client = new cliente();

$id = $_GET['id'];
$consul = $client->consultarCliente($id);

$resultado = $conect->Mostrar($consul);


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
    <td> <input type="text" value="<?php echo $row["Cedula_Cliente"];  ?>" name="cedula"> </td>
    <td> <input type="text" value="<?php echo $row["Nombre"];  ?>" name="nombre"> </td>
    <td> <input type="text" value="<?php echo $row["Apellidos"]; ?>" name="apellido"> </td>                               
    <td> <input type="text" value="<?php echo $row["Direccion"]; ?>" name="direc"></td>
    <td> <input type="text" value="<?php echo $row["Telefono"];  ?>" name="tel"></td>
    <td><?php        
$sql = "SELECT * FROM barrio";            

$query = $conect->login($sql);
                        

$result = mysqli_num_rows($query);

?>
    <Select name="barrio" id="barrio">
      <?php
            if($result > 0){

while ($cliente = mysqli_fetch_array($query)){
    

?>
<option value="<?php echo $cliente["ID_Barrio"];?>"><?php echo $cliente["Nombre_barrio"];?></option>

<?php
}

            }
            ?></td>
  

    <td> <input type="submit" value="Actualizar" name="actualizar"></td>
    
    
    </tr>
    </form>






   
    <?php 
    
    } mysqli_free_result($resultado);
    ?>
    
    </table> 

    <a href="ingresarCliente.php"> Ver clientes</a>

</body>
</html>