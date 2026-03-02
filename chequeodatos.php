<?php
    require 'includes/bdd.php';
    session_start();
    $usuario = $_POST['usuario'];
    $clave = $_POST['password'];
    $mail = $_POST['Mail'];
    
    // consulta a la base de datos para ver si existe el usuario
    $consulta = "select NomUsu, Clave, Email from users where NomUsu = '$usuario' ";

    // ejecutar la consulta
    $resultado = mysqli_query($conexion, $consulta);

    // recorrer los datos traidos por la consulta
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $usuario_db = $fila['NomUsu'];
        $pass_db = $fila['Clave'];
        $mail_db = $fila['Email'];
    }
    if(isset($usuario_db)){
        if($usuario==$usuario_db && $clave==$pass_db){
            $_SESSION['autorizado']='si';
            header('location:index2.php');
    }else {
        $_SESSION['mensaje']='Los datos ingresados son incorrectos.';
        header('location:Index.php'); 
    }
    }  else {
        $_SESSION['mensaje']='Los datos ingresados son incorrectos.';
        header('location:Index.php'); 
    }

  /*  if($usuario==$usuario_db && $clave==$pass_db){
        $_SESSION['autorizado']='si';
       // header('location:Stock.php');
    echo $usuario;
    echo $usuario_db;

    } else {
        header('location:chequeodatos.php'); 
        $_SESSION['mensaje']='Los datos ingresados son incorrectos.';
    }
    
*/?>
<br>
<a href="Index.php">index