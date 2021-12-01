<?php   

include("../../php/conexion.php");

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
<form action="scriptP.php" method="POST">
<br><br><br><br><br>
    <h2>Producto</h2>

    <input type="submit" value="Enviar">

    <label for="">Nombre del Producto</label><br>   
    <input type="text" name="Nombre_Producto" placeholder=""><br><br>

    <label for="">Precio de Entrada</label><br>   
    <input type="text" name="Precio_Entrada" placeholder=""><br><br>

    <label for="">Precio de las cajas</label><br>   
    <input type="text" name="Precio_Cajas" placeholder=""><br><br>
    
    <label for="">Precio del blister </label><br>   
    <input type="text" name="Precio_Blister" placeholder=""><br><br>
    
    <label for="">Precio unidad</label><br>   
    <input type="text" name="Precio_Unidad" placeholder=""><br><br>

    <label for="">Concentracion</label><br>   
    <input type="text" name="concentracion" placeholder=""><br><br>

    <label for="">Tipo De Producto</label><br>
<?php                   
$sqlTipo = "SELECT * FROM tipo";            
$conect = new Conexion();
$queryTipo = $conect->login($sqlTipo);
$result_tipo = mysqli_num_rows($queryTipo);

?>
    <Select name="tipoProducto" id="tipoProducto">
      <?php
            if($result_tipo > 0){

while ($tipo = mysqli_fetch_array($queryTipo)){
    

?>
<option value="<?php echo $tipo["ID_Tipo"];?>"><?php echo $tipo["Nombre_Tipo"];?></option>

<?php
}

            }
            ?>
    </Select><br><br>
     
    <label for="">Laboratorio</label><br>
<?php    
$sqlLab = "SELECT * FROM laboratorio";            

$queryLab = $conect->login($sqlLab);
                         

$result_laboratorio = mysqli_num_rows($queryLab);

?>
    <Select name="laboratorio" id="laboratorio">
      <?php
            if($result_laboratorio > 0){

while ($laboratorio = mysqli_fetch_array($queryLab)){
    

?>
<option value="<?php echo $laboratorio["ID_Laboratorio"];?>"><?php echo $laboratorio["Nombre_Laboratorio"];?></option>

<?php
}

            }
            ?>
    </Select><br><br>

    <label for="">Presentacion</label><br>
<?php        
$sqlPresent = "SELECT * FROM presentacion";            

$queryPresent = $conect->login($sqlPresent);
                        

$result_presentacion = mysqli_num_rows($queryPresent);

?>
    <Select name="presentacion" id="presentacion">
      <?php
            if($result_presentacion > 0){

while ($presentacion = mysqli_fetch_array($queryPresent)){
    

?>
<option value="<?php echo $presentacion["ID_Presentacion"];?>"><?php echo $presentacion["Nombre_Presentacion"];?></option>

<?php
}

            }
            ?>
    </Select><br><br>

  

    
</form>

</center>


</body>
</html>

