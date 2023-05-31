<?php
//DESTINO DE EMAIL
$destinatario="thundern@gmail.com";
//NOMBRE
$nombres =$_POST['Nombres'];

$apellidos = $_POST['Apellidos'];

$cedula = $_POST['Cedula'];

$direccion = $_POST['Direccion'];

$ciudad = $_POST['Ciudad'];

$telefono =$_POST['Telefono'];

$tipoFalla =$_POST['Tipo De Falla'];

$message =$_POST['message'];

$asunto =$_POST['Tipo De Falla'];

//DATOS COMPLETOS
$text="Nombres: " .$nombres ."\n" ."Apellidos: " .$apellidos  ."\n" ."Numero de telefono: " .$telefono ."\n" ."Tipo Falla: " .$tipoFalla;
//DESDE QUIEN VIENE EL EMAIL
$header= "From: thundernet.com" ."\r\n";
//CON COPIA HACIA
$header.="Reply-To:" . $email ."\r\n";
//CREANDO EL HEADER DEL EMAIL
$header.="X-Mailer: PHP/" . phpversion();
//ENVIANDO EMAIL

$mail = mail($destinatario,$asunto,$text,$header);

if($mail){

    echo "<h4>Mail enviado </4>";

}else{

    echo "<h4>Mail not sent </4>";

}

?>

