<?php 
include "../../php/lote.php";

include "../../php/conexion.php";

$lote = new lote();
$con = new Conexion();
//**Recibir datos */
$id = intval($_GET['id']);
$eliminar = $lote->EliminarLote($id);

$resultado = $con->delete($eliminar);

//**Realizar consulta */

echo $resultado;
//**Ejecutar consulta */
if(!empty($resultado)){
    echo "
    <script>
    alert('se ha eliminado exitosamente');
    window.location='ingresarlote.php';
    </script>
    ";
  
  }
  else{
    echo 'error en la eliminacion';
  }