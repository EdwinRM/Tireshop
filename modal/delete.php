<?php 
include('../vistas/conexion.php');
 
   $id  = $_POST['data_id'];  
   if ($resultado = mysqli_query($resultado, "DELETE FROM llantas WHERE id_llanta=$id")) {
      echo json_encode("Llanta eliminada");
   }else{
      echo json_encode("Error al eliminar llanta");     
   }  
   
?>