<?php
include("../../php/conexion.php");
include("../../php/proveedor.php");

$conect = new Conexion();
$prov = new proveedor();


/**Recibir datos tabla lote y almacenar en variables */

$Nombre=$_POST["nombre"];
$Telefono=$_POST["tel"];
$Correo=$_POST["correo"]  ;
$Dirrecion=$_POST["direc"];


//**Consulta para insertar tabla lote */
$insert = $prov ->crearProveedor($Nombre,$Telefono,$Correo,$Dirrecion);

//**ejecutar consulta */
$query = $conect->Ingresar($insert);
  



if(!empty($query)){
   
   echo "
   <script>
   alert('Proveedor ingresado exitosamente');
   window.location='ingresarProvee.php';
   </script>
   ";
   
   }else{
      echo "
    <script>
    alert('error en el ingreso');
    window.location='ingresarProvee.php';
    </script>
    ";
      
   }
?>