<?php
    require 'includes/bdd.php';

    if (isset($_POST['usuario']) && !empty($_POST['usuario'] && 
        isset($_POST['password']) && !empty($_POST['password'] &&
        isset($_POST['Email']) && !empty($_POST['Email'])))) {

            $usuario = $_POST['usuario'];
            $password = $_POST['password'];
            $email = $_POST['Email'];

            echo $usuario;
            echo $password;
            echo $email;
            $sqlcons="INSERT INTO users (NomUsu,Clave,Email) VALUES('$usuario','$password','$email')";
           mysqli_query($conexion,$sqlcons);
        echo"Datos cargados correctamente";
        }else{
            echo "Error al insertar datos";
        }


?>
<br>
<a href="Index.php">Retornar al inicio