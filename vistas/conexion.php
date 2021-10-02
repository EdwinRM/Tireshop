<?php
//    ------------------------------------------------------------
//    -------FUNCIONES PARA LA CONEXIÓN----
//    ------------------------------------------------------------
    
   //private $_conexion;
    //Realiza la conexion al momento de requerirse la clase
 
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = "edwinrm1_llantera";
        $resultado= mysqli_connect($host, $user, $password, $database);        
        if (!$resultado){
                echo ("no se puede conectar con la base de datos");
            exit;
            }
            else{
                //echo("Conecto owó");
            }
        mysqli_select_db($resultado, $database);    
        
    /*
    //Hace la conexion a la bd
     function conecc() {
        return $this->_conexion;
    }
   
 //    -----------------------------------------------------------
//    -------FUNCIONES MYSQLI-----------------------
//    ------------------------------------------------------------
   
    //Ejecuta una consulta
     function query($sql) {
        $result = mysqli_query($this->_conexion,$sql);
        return $result;
    }
    //Comprobamos si se afectaron filas en la base de datos
     function num_rows($sql) {
        return (mysqli_num_rows($sql) > 0); 
    }
    //Escapa los caracteres especiales de una cadena para usarla en una sentencia SQL
     function real_escape_string($datos){
        return mysqli_real_escape_string($this->_conexion, $datos);
    }
    //Cierra la conexión a la base de datos
     function close(){
        mysqli_close($this->_conexion);
    }*/
 