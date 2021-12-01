<?php 
include "../../php/productos.php";

include "../../php/conexion.php";

$producto = new productos();
$con = new Conexion();
//**Recibir datos */

$id = $_GET['id'];
$eliminar = $producto->EliminarProducto($id);

$resultado = $con->delete($eliminar);



if(!$resultado){
    echo "
    <script>
    alert('El producto fue eliminado exitosamente');
    window.location='inventario.php';
    </script>
    ";
  }
  else{
      echo "
      <script>
      alert('se ha eliminado exitosamente');
      window.location='inventario.php';
      </script>
      ";
  }