<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Ver ofertas</title>
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>


    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

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
    <link href="css/jumbotron.css" rel="stylesheet" type="text/css"/>
    
  </head>
  
  <body>
      <!--AQUI EMPIEZA LA BARRA SUPERIOR-->
      <link href="css/navbar-top-fixed.css" rel="stylesheet" type="text/css"/>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="index.html">AIEP COMPARTE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">COMO FUNCIONA<span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">PUBLICAR SERVICIO</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">BUSCAR SERVICIO</a>
      </li>
      <!-- Icono disabled para barra de tareas
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
      -->
     <!--Dropdown
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
        </li>
     -->
    </ul>
    
      <ul>
 
        <li class="nav-item">
    <a class="nav-link" href="login.php">INGRESAR</a>
    </li>   
    </ul>
    <!--Boton buscar con el campo
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
      </div>
    -->
</nav>

      <!--AQUI TERMINA LA BARRA SUPERIOR-->
      
<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  

 
    
<?php
    include("funciones.php"); 
    $cnn = Conectar();
    $sql ="select * from oferta_prueba where estado='0'";
    $rs  = mysqli_query($cnn,$sql);


while($row = mysqli_fetch_array($rs)){

echo "<center>";
echo "<div class='card mb-1' style='max-width: 720px;'>";
echo "<div class='row no-gutters'>";
echo "<div class='col-md-2'>";
echo "<img src='img/logo 72.png' class='card-img alt'='Logo personal' width='95' height='72'>";
echo "</div>";
echo "<div class='col-md-9'>";
echo "<div class='card-body'>";
echo "<h5 class='card-title'>$row[nombre]</h5>";
echo "<p class='card-text'>$row[descripcion]</p>";
echo "<p class='card-text'><small class='text-muted'>$row[carrera]</small></p>";
echo "<div class='col-md-9'>";
echo "<a href='contactar.php/?correo=$row[correo]&nombre=$row[nombre]&apellido=$row[apellido]'>Contactar a $row[apellido]</a>";
echo " </div>";
echo " </div>";
echo " </div>";
echo " </div>";
echo " </div>";
echo " </center>";
}
?>   
    
</main>

<footer class="container">
  <p>&copy; Company 2017-2020</p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
