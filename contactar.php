<?php 
session_start();
/*if(isset($_POST['enviar'])){
if(!empty($_POST['nombre'])&& !empty($_POST['apellido'])&& !empty($_POST['correo']) && !empty($_POST['mensaje'])){*/
     include("funciones.php"); 
            $cnn = Conectar();

$correodestino = $_GET['correo'];
$nombredestino = $_GET['nombre'];
$apellidodestino = $_GET['apellido'];


 
?>

<html>
    <head>
        <title>Contact Form Tutorial by Bootstrapious.com</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>
    </head>
    <body>
<!--AQUI EMPIEZA LA BARRA SUPERIOR-->
    <link href="css/navbar-top-fixed.css" rel="stylesheet" type="text/css"/>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="index.php">AIEP COMPARTE</a>
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
            echo "<a class='nav-link' href='login.php'>INGRESAR</a>";

}else{
            echo "<a class='nav-link' href='logout.php'>Cerrar sesión</a>";
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

            <div class="row">

                <div class="col-xl-8 offset-xl-2 py-5">

                    <h1>Contactar servicio<a href="http://bootstrapious.com">.</a></h1>

                    <p class="lead"></p>

                    <!-- We're going to place the form here in the next step -->
                    <form> <form id="contact-form" method="post" role="form" >
                    <?php error_reporting(0);?>

                        
<div class="messages"></div>

<div class="controls">

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="nombre"><?php echo "$nombredestino"; ?></label>
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="apellido"><?php echo "$apellidodestino"; ?></label>
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="correo" id="correo" name="correo"><?php echo "$correodestino"; ?></label>
                <div class="help-block with-errors"></div>
            </div>
        </div>
            <div class="col-md-6">
                <div class="form-group">
                 <label for="carrera"></label>
                <div class="help-block with-errors"></div>
            </div>
        </div>    
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="mensaje">Escribe un mensaje al estudiante, explicando que es lo que necesitas</label>
                <textarea id="mensaje" name="mensaje" class="form-control" placeholder="Escribe un mensaje" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <?php  
        echo "$mensaje";
        $mensaje = $_POST['mensaje'];  
        $correo = $_POST['correo']; 
        echo "<div class='col-md-12'>";
         echo "<a href='enviarcorreo.php?correo=$correodestino&mensaje=$mensaje'>Enviar correo</a>";
        echo "</div>";
        ?>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="text-muted">
                <strong>*</strong> Todos los campos son necesarios
</p>
        </div>
    </div>
</div>

</form></form> 
<?php
include("enviarcorreo.php");
?>
                </div>

            </div>

        </div>

                        








        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
        <script src="contact.js"></script>
    </body>
</html>