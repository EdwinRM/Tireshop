<?php 
include('../vistas/conexion.php');
 
   $rin  = $_POST['data_rin'];
   $serie = $_POST['data_serie'];
   $marca = $_POST['data_marca'];
   $precio = $_POST['data_precio'];
  
   if ($resultado = mysqli_query($resultado, "INSERT INTO llantas (marca,num_rin,precio,serie) VALUES ('$marca', $rin, $precio, '$serie')")) {
      echo json_encode("Nueva llanta registrada");
   }else{
      echo json_encode("Error al registrar llanta");     
   }  
   
?>