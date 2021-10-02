<?php 
include('../vistas/conexion.php');

   $id  = $_POST['data_id'];
   $rin  = $_POST['data_rin'];
   $serie = $_POST['data_serie'];
   $marca = $_POST['data_marca'];
   $precio = $_POST['data_precio'];
  
   if ($resultado = mysqli_query($resultado, "UPDATE llantas SET marca = '$marca', serie = '$serie',num_rin = '$rin', precio = $precio WHERE id_llanta= $id")) {
      echo json_encode("Datos de llanta actualizados");
   }else{
      echo json_encode("Error al actualizar llanta");     
   }  
   
?>