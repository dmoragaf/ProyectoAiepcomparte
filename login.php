<?php
    session_start();
?>

!<doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Signin</title>
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
    <form class="form-signin" method="post" action="">
         <?php error_reporting(0);?>
  <img class="mb-4" src="img/logo 72.png" alt="" width="72" height="95">
  <h1 class="h3 mb-3 font-weight-normal">Ingrese sus datos</h1>
  <label for="inputEmail" class="sr-only">Correo institucional</label>
  <input type="email" id="usu" name="usu" class="form-control" placeholder="Correo" required autofocus>
  <label for="inputPassword" class="sr-only">Contraseña</label>
  <input type="password" id="cla" name="cla" class="form-control" placeholder="Contraseña" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Recordarme
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" name="btnIngresar" value="Ingresar" type="submit">Ingresar</button>

        <!--Aca empieza el codigo del login-->
            <?php
          if($_POST['btnIngresar']=="Ingresar"){
            include("funciones.php");  
            $cnn = Conectar();
            $us = $_POST['usu'];
            $clav = $_POST['cla'];
            $sql ="select * from usuario2 where correo='$us' and clave='$clav'";
            $rs  = mysqli_query($cnn,$sql);
                if($row = mysqli_num_rows($rs) !=0){
                        
                    if($row = mysqli_fetch_array($rs)){
                        $_SESSION['datoCorreo'] = $row[correo];
                        $_SESSION['datoNom'] = $row[nombre];
                        $_SESSION['datoApe'] = $row[apellido];
                        $_SESSION['datoCarrera'] = $row[carrera];
                        $_SESSION['datoPuntos'] = $row[puntos];
                        echo "<script>alert('Bienvenido $_SESSION[datoNom] $_SESSION[datoApe] ')</script>";
                                echo "<script type='text/javascript'>window.location='index.php'</script>";    
                    }
                }echo "<script>alert('El Usuario ingresado no es valido')</script>";
          }
    
          ?>
        
   <!--Aca termina el codigo del login-->
        
        
  <p class="mt-5 mb-3 text-muted">-</p>
</form>
</body>
</html>

