<?php 
include("../../php/proveedor.php");

include "../../php/conexion.php";

$prov = new proveedor();
$con = new Conexion();
//**Recibir datos */
$id = intval($_GET['id']);
$eliminar = $prov->eliminarProveedor($id);

$resultado = $con->delete($eliminar);

//**Realizar consulta */

echo $resultado;
//**Ejecutar consulta */
if(!empty($resultado)){
    echo "
    <script>
    alert('se ha eliminado exitosamente');
    window.location='ingresarProvee.php';
    </script>
    ";
  
  }
  else{
    echo "
    <script>
    alert('Error en la eliminacion');
    window.location='ingresarProvee.php';
    </script>
    ";
  }