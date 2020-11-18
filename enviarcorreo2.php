<?php 


/*$header ="From: probandoestawea@correo.com" . "\r\n";
$header.= "Reply-To: imhersir@gmail.com" . "\r\n";
$header.= "X-Mailer: PHP/".phpversion();
$mail = mail($correo,$mensaje,$nombre,$apellido,$header);*/
$mail = "david.moraga.f@gmail.com";

$message = "
Nombre: oli
Apellido: s
Carrera: a
Te envia un mensaje con lo siguiente: d
";

if (mail($mail,"Solicitud de AiepComparte",$message)){
    echo "<script>alert('Se ha enviado su correo correctamente')</script>";
} else { echo "<script>alert('Nope')</script>";
       }





?>