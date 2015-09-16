<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contacto Entre Alamedas</title>
</head>
<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$para = 'ediaz@ideasinmobiliarias.com.com,lpatlixco@gmail.com';
$titulo = 'LP ATLIXCO';
$header = 'From: ' . $nombre;
$msjCorreo = "
DATOS DE CONTACTO

Nombre de Cliente: $nombre

Mail:$email 

Telefono: $telefono ";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Gracias, en breve enviaremos información.');
window.location.href = 'http://www.casas-atlixco.com//';
</script>";
} else {
echo 'Falló el envio';
}
}
?>

<body>
</body>
</html>