<?php 
include("../../php/proveedor.php");

include "../../php/conexion.php";

$prov = new proveedor();
$con = new Conexion();

/**Recibir datos y almacenar en variables */
$NiT_provedor=$_POST["Nit_prove"];
$Nombre=$_POST["nombre"];
$Telefono=$_POST["tel"];
$Correo=$_POST["correo"]  ;
$Dirrecion=$_POST["direc"];




/// actualizar datos


$actualizar = $prov -> modificarProveedor($NiT_provedor,$Nombre,$Telefono,$Correo,$Dirrecion);


//**Ejecutar consulta */

echo $actualizar;
$query = $con->Mostrar($actualizar);



if(!$query){
  echo "
  <script>
  alert('error en la actualizacion');
  window.location='ingresarProvee.php';
  </script>
  ";
}
else{
  echo "
  <script>
  alert('se ha sido actualizado exitosamente');
  window.location='ingresarProvee.php';
  </script>
  ";
    
}

?>