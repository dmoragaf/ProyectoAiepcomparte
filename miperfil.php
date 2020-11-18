<?php
session_start();
error_reporting(0); 
/* SACAR ESTO PARA QUE ENVIE AL INDEX SI NO SE ESTA LOGEADO
if(! isset($_SESSION['datoCorreo'])){

    session_destroy();
    header("Location:index.php");

}else{

}*/
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Mi perfil</title>
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/jumbotron/">

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
    <link href="css/perfilstyle.css" rel="stylesheet" type="text/css"/>
    
    
    
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
    <?php



if(! isset($_SESSION['datoCorreo'])){

echo "<a href='logout.php'>Cerrar sesión</a>";

}else{

}
        ?>

    
        
    </li> 
        <li class="nav-item">
            <?php



            if( isset($_SESSION['datoCorreo'])){

            echo "<a class='nav-link' href='login.php'>INGRESAR</a>";

}else{

}
        ?>

            
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
     
      <div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
                                <center>
                                <div class="profile-userpic">
					<img src="https://static.change.org/profile-img/default-user-profile.svg" class="img-responsive" alt="">
				</div>
                                </center>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?php
                        echo  "".$_SESSION['datoNom']." ".$_SESSION['datoApe'];
                        ?>
					</div>
					<div class="profile-usertitle-job">
						<?php
                        echo  "".$_SESSION['datoCarrera']."";
                        ?>
					</div>
                    <div class="profile-usertitle-job">
						<?php
                        echo  "Puntos para cambiar: ".$_SESSION['datoPuntos']."";
                        ?>
					</div>
                    <div class="profile-usertitle-job">	    <?php
                        echo  "Correo:  ".$_SESSION['datoCorreo']."";
                        ?>
                    </div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU 
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="glyphicon glyphicon-ok"></i>
							Tasks </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>
				</div>
                -->
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			   Some user related content goes here...
            </div>
		</div>
	</div>
</div>
 
  </body>>

<footer class="container">
  <p>&copy; Company 2017-2020</p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
