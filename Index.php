
<!DOCTYPE html>
<html lang="es">

  <head>
  <?php
    session_start();
   ?>
    <!-- Etiquetas meta necesarias -->  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="trabajo practico aplicaciones web">
    <meta name="author" content="">

    <!-- Ícono de la solapa -->
    <link href="img/logo_unlz.jpg" rel="shortcut icon" type="image/vnd.microsoft.icon" />

    <!-- Solapa de la página -->
    <title>Inicio</title>

   <!-- CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
  
    <div class="container">

      <!-- Título y subtítulo -->
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5 font-italic">Si desea acceder a nuestro sistema por favor Inicie sesion.</h1>
          <p class="lead">Si no se encuentra registrado por favor registrese.</p>
        </div>
      </div> <!-- Fin título y subtítulo -->

      <?php
              
              if(isset($_SESSION['mensaje'])){
              echo $_SESSION ['mensaje'];
            }

      ?>   
    
    
    <a href="Login.php">Login</a>
    <a href="Registro.php">Registro</a>
 

      </div> <!-- Fin contenedor principal -->

<!-- JavaScript -->
<script src="fontawesome/all.js"></script>
<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
