<?php
     // Datos
     $usuario = 'root';
     $clave = '';
     $servidor = "localhost";
     $basededatos = "proyectofinal"; 
    // Se crea la conexion.
  
        $conexion = mysqli_connect( $servidor, $usuario, $clave,$basededatos) 
        or die ('No se ha podido conectar al servidor.');
    //Base de datos
    $db = mysqli_select_db( $conexion, $basededatos ) 
    or die ('Error con base de datos.');
    mysqli_set_charset($conexion, 'utf8'); 
    
?>