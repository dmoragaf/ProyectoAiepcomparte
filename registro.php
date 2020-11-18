<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Registro</title>
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet" type="text/css"/>
  </head>
  <body class="text-center">
      <!--AQUI EMPIEZA LA BARRA SUPERIOR-->
      <link href="css/navbar-top-fixed.css" rel="stylesheet" type="text/css"/>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="index.html">AIEP COMPARTE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

</nav>
       <!--AQUI TERMINA LA BARRA SUPERIOR-->
        <?php error_reporting(0);?>
    <form class="form-signin" id="form-registro" method="post" action="">
  <img class="mb-4" src="img/logo 72.png" alt="" width="95" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Ingrese sus datos</h1>
        
  <label for="inputEmail" class="sr-only">Nombre</label>
  <input type="text" id="nom" name="nom" class="form-control" placeholder="ingrese su nombre" required autofocus>
        
   <label for="inputEmail" class="sr-only">Apellido</label>
  <input type="text" id="ape" name="ape" class="form-control" placeholder="ingrese su apellido" required autofocus> 
        
  <label for="inputEmail" class="sr-only">Carrera</label>
  <input type="text" id="carre" name="carre" class="form-control" placeholder="carrera" required>
        
  <label for="inputEmail" class="sr-only">Correo institucional</label>
  <input type="text" id="correo" name="correo" class="form-control" placeholder="Correo" required autofocus>
        
  <label for="inputPassword" class="sr-only">Contraseña</label>
  <input type="password" id="cla" name="cla" class="form-control" placeholder="Contraseña" required>
  
            <!-- Checkbox inutil
  <div class="checkbox mb-1">
    <label>
      <input type="checkbox" value="remember-me"> Acepto el Acuerdo de Usuario y Política de Privacidad
    </label>
  </div>
            -->
            <?php
          if($_POST['btnRegistrar']=="Registrar"){
            include("funciones.php");  
            $cnn = Conectar();
            
            $correo = $_POST['correo'];  
            $nom = $_POST['nom'];  
            $ape = $_POST['ape'];   
            $carr = $_POST['carre'];  
            $cla = $_POST['cla'];  

            $sql = "insert into usuario2 values ('$correo','$nom','$ape','$carr','$cla','1','1')";
            mysqli_query($cnn,$sql);
            echo"<script>alert('Se ha registrado correctamente ')</script>";
          }
    
            ?>
    <input type="submit" class="btn btn-lg btn-primary btn-block" name="btnRegistrar" value="Registrar">   
  <!--<button class="btn btn-lg btn-primary btn-block" name="btnRegistrar" id="btnRegistrar" type="submit value="Registrar">Registrar</button>--> 


        
  <p class="mt-5 mb-3 text-muted">-</p>
</form>
      
      
</body>
</html>
