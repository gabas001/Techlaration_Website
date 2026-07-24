<?php 
    require 'includes/bdd.php';

?>
<!DOCTYPE html>
<html lang="es">

  <head>
    <!-- Etiquetas meta necesarias -->  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="trabajo practico aplicaciones web">
    <meta name="author" content="">

    <!-- Titulo de la pagina -->
    <title>Login</title>

   <!-- CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- PHP -->
    <?php
        session_start();
        
        if(!isset($_SESSION['autorizado'])){
          $_SESSION['autorizado']='no';
          $_SESSION['mensaje']='Debe loguearse para ingresar al sitio.';
        } 

    ?>
  </head>
  <body>
<!-- Contenedor principal -->
        <div class="container">

<!-- Título y subtítulo -->
<div class="row">
  <div class="col-lg-12 text-center">
    <h1 class="mt-5 font-italic">Bienvenido.</h1>
    <p class="lead">Por favor ingrese sus datos.</p>
  </div>
</div> <!-- Fin título y subtítulo -->
<?php  if($_SESSION['autorizado']=='no'){ ?>
          
          <form method="post" action="chequeodatos.php">
            <div class="col-4">
              <div class="form-group">
                <input name="usuario" type="text" class="form-control" placeholder="Usuario">
                </div>
                <div class="form-group">
                <input name="password" type="password" class="form-control" placeholder="Ingrese clave.">
                </div>
                <div class="form-group">
              <input name="Mail" type="text" class="form-control" placeholder="Ingrese Su Email">
                </div>                
                <br>
                <input type="submit" class="btn btn-primary" value="Iniciar sesion">
                </div>                        
        </form>
        
    <?php };
     
      ?>
 </div>     
    <!-- JavaScript -->
    <script src="fontawesome/all.js"></script>
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

