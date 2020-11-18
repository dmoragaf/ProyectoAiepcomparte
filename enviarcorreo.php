<?php 
session_start();
/*if(isset($_POST['enviar'])){
if(!empty($_POST['nombre'])&& !empty($_POST['apellido'])&& !empty($_POST['correo']) && !empty($_POST['mensaje'])){*/
        
            include("funciones.php"); 
            $cnn = Conectar();
        


$envmail=$_SESSION['datoCorreo'];

$envnombre=$_SESSION['datoNom'];
$envapellido=$_SESSION['datoApe'];
$envcarrera=$_SESSION['datoCarrera'];

$correodestino = $_GET['correo'];
$mensaje = $_GET['mensaje'];

/*$header ="From: probandoestawea@correo.com" . "\r\n";
$header.= "Reply-To: imhersir@gmail.com" . "\r\n";
$header.= "X-Mailer: PHP/".phpversion();
$mail = mail($correo,$mensaje,$nombre,$apellido,$header);*/

$message = "
Nombre: ".$envnombre."
Apellido: ".$envapellido."
Carrera: ".$envcarrera."
Te envia un mensaje con lo siguiente: ".$mensaje."
";

if (mail($mail,"Solicitud de AiepComparte",$message)){
    echo "<script>alert('Se ha enviado su correo correctamente')</script>";
} else { echo "<script>alert('Nope')</script>";
       }





?>