
<?php
$mail = ("zarkprogame@gmail.com");

$Nombre = $_POST ["Nombre"];
$Email = $_POST ["Email"];
$Anime = $_POST ["Anime"];
$Porque = $_POST ["Porque"];

$message ="
Mensaje del contacto 

Nombre ".$Nombre."
Email ".$Email."
Anime Fav ".$Anime."
Por que ".$Porque."


";

 (mail($mail,"Mensaje del contacto",$message))
 ?>
 
 <script>alert("Gracias por su mensaje");</script>
 <script type="text/javascript">
 window.location="index.html";
 </script>
