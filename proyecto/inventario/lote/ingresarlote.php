<?php 
include("../../php/conexion.php");
include("../../php/lote.php");

$conect = new Conexion();
$lot = new lote();

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
<center>
    <form action="ScriptLote.php" method="POST">
        <br><br><br><h2>Lote</h2>    
        <label for="">Fecha vencimiento</label><br>   
        <input type="date" name="Fecha_vencimiento" placeholder=""><br><br>
    
        <label for=""> Proveedor</label><br>
<?php        

$sqlProv = "SELECT * FROM provedor"; 
$queryProv = $conect->login($sqlProv);
$result_prove = mysqli_num_rows($queryProv);

?>
    <Select name="provedorID" id="provedorID">
      <?php
            if($result_prove > 0){

while ($prove = mysqli_fetch_array($queryProv)){
    

?>
<option value="<?php echo $prove["NiT_provedor"];?>"><?php echo $prove["Nombre"];?></option>

<?php
}

            }
            ?>
    </Select><br><br>
    
        <label for="">Stock</label><br>   
        <input type="number" name="Stock" placeholder=""><br><br>
       

        <label for="">Codigo producto</label><br>
<?php                               
$sqlProd = "SELECT * FROM producto";            

$queryProd = $conect->login($sqlProd);
$result_produc = mysqli_num_rows($queryProd);

?>
    <Select name="productoid" id="productoid">
      <?php
            if($result_produc > 0){

while ($produc = mysqli_fetch_array($queryProd)){
    

?>
<option value="<?php echo $produc["Codigo_Producto"];?>"><?php echo $produc["Nombre_Producto"];?></option>

<?php
}
            }
    
    ?>
    
    <input type="submit">

</form>



   
</body>
</html>