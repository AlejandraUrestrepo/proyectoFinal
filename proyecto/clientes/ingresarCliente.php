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
    <link rel="stylesheet" href="../../css/estilos.css">
    <title>registrar Producto</title>
 
</head>
<body>

<center>
    <form action="ScriptLote.php" method="POST">
        <br><br><br><h2>cliente</h2>    

    

</form>
</center>


<center>
<form action="procesoIngresar.php" method="post">
<br><br><br><h2>Clientes</h2>   


        <label for="">Cedula</label><br>   
        <input type="text" name="cedula" placeholder=""><br><br> 


        <label for="">Nombre</label><br>   
        <input type="text" name="nombre" placeholder=""><br><br>

        <label for=""> Apellidos</label><br>
        <input type="text" name="apellido"><br><br>


        <label for=""> Telefono</label><br>
        <input type="text" name="tel"><br><br>

        <label for="">Direccion</label><br>
        <input type="text" name="direc"><br><br>

        <label for="">Barrio</label><br>
        <?php        
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
            ?>
            
    <input type="submit" value="Enviar">
</form>
<br><br><br><br>
        </body>
</html>