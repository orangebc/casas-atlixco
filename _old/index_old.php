<!DOCTYPE html>
<html lang="es">
<head>
<? include("html/head.php"); ?>
</head>
<body>
<!--SLIDER-->
<div class="contsilde">
<section id="contenedor">
<div class="flexslider">
<ul class="slides">
<li><img src="images/slide1.jpg" width="100%" height="auto" alt="slide1"></li>
<li><img src="images/slide2.jpg" width="100%" height="auto" alt="slide1"></li>
<li><img src="images/slide3.jpg" width="100%" height="auto" alt="slide1"></li>
<li><img src="images/slide4.jpg" width="100%" height="auto" alt="slide1"></li>
</ul>
</div>
</section>
</div>
<!--COLUMNA IZQ-->
<article>
<div class="col1">
<div class="logo"><img src="images/logo.png" width="100%" height="auto" alt="logo"></div>
<div class="line"></div>
<div class="line" id="short"></div>
<h1>Construye la casa de tus sueños</h1>
<h1 class="frase2">en lotes desde 120 hasta 140 m2</h1>
<div class="line" id="short"></div>
<h2>LOTES RESIDENCIALES EN ATLIXCO, PUEBLA</h2>
<h2 class="frase2">a 15 minutos de San Andrés Cholula</h2>
<div class="line"></div>
<h2>SOLICITAR ENVÍO DE INFORMACIÓN</h2>

<!--FORMULARIO-->
<form action="contacto.php" method="post">
<h2 class="frase3">Nombre y Apellidos</h2>
<input id="nombre" type="text" name="nombre"required />
<h2 class="frase3">Teléfono (10 dígitos)</h2>
<input id="telefono" type="text" name="telefono"required />
<h2 class="frase3">Mail</h2>
<input id="email" type="text" name="email"required />
<h2 class="frase3"></h2>
<input id="submit" type="submit" name="submit" value="Enviar Solicitud" />
</div>
<div class="triangulo"><img src="images/triangulo.png" width="100%" height="auto" alt="triangulo"></div>
</article>
<!--CARACTERÍSTICAS-->
<section id="cont2">
<h2 class="frase4">CARACTERÍSTICAS</h2>
<p>Lotes residenciales desde 120 m2 hasta 240 m2 ubicados a solo 15 minutos de San Andrés Cholula, Puebla en fraccionamiento totalmente bardeado con alberca, servicios ocultos, calles adoquinadas, seguridad y amplias vialidades.<br>Tenemos facilidades de pago y no estamos sujetos a la ley antilavado.</p>
<div class="icons"><img src="images/icon1.png" width="100%" height="auto" alt="bardeado"><br>Totalmente<br>bardeado</div>
<div class="icons"><img src="images/icon2.png" width="100%" height="auto" alt="alberca"><br>Alberca<br>jaguey</div>
<div class="icons"><img src="images/icon3.png" width="100%" height="auto" alt="servicios"><br>Servicios<br>ocultos</div>
<div class="icons"><img src="images/icon4.png" width="100%" height="auto" alt="calles"><br>Calles<br>adoquinadas</div>
<div class="icons"><img src="images/icon5.png" width="100%" height="auto" alt="vigilancia"><br>Vigilancia<br>seguridad</div>
<div class="icons"><img src="images/icon6.png" width="100%" height="auto" alt="vialidades"><br>Amplias<br>vialidades</div>

<div class="logoideas"><img src="images/logoideas.jpg" width="100%" height="auto" alt="logoideasinmobiliarias"></div>

<!--AVISO DE PRIVACIDAD-->
<h5 id="boton_menu_open">Aviso de privacidad</h5>
<p id="oculto" style="display:none;">INMOIDEAS, S.A. DE C.V., con domicilio en MORAS 409, COL. DEL VALLE, DELEGACION BENITO JUAREZ, MÉXICO D.F. C.P.03100. EN PUEBLA (222) 169-17-18 VIA AXTLIXCAYOTL #5208, COL. TLAXCALCINGO (RESERVA TERRITORIAL ANGELOPOLIS), SAN ANDRES CHOLULA, PUEBLA, es responsable de recabar sus datos personales, del uso que se le dé a los mismos y de su protección. Su información personal será utilizada para proveer los servicios y productos que ha solicitado, informarle sobre cambios en los mismos y evaluar la calidad del servicio que le brindamos. Para las finalidades antes mencionadas, requerimos obtener los siguientes datos personales: Nombre completo, dirección, email y teléfonos, considerado como sensible según la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, su dirección y teléfonos.

Usted tiene derecho de acceder, rectificar y cancelar sus datos personales, así como de oponerse al tratamiento de los mismos o revocar el consentimiento que para tal fin nos haya otorgado, a través de los procedimientos que hemos implementado. Para conocer dichos procedimientos, los requisitos y plazos, se puede poner en contacto con nuestro departamento de datos personales en MEXICO D.F. (55) 5559-27-00 MORAS 409, COL. DEL VALLE, DELEGACION BENITO JUAREZ, MÉXICO D.F. C.P.03100 PUEBLA (222) 169-17-18 VIA AXTLIXCAYOTL #5208, COL. TLAXCALCINGO (RESERVA TERRITORIAL ANGELOPOLIS), SAN ANDRES CHOLULA, PUEBLA. CONTACTO VIA E-MAIL: protecciondedatos@ideasinmobiliarias.com o visitar nuestra página de Internet www.ideasinmobiliarias.mx
Asimismo, le informamos que sus datos personales pueden ser transferidos y tratados dentro y fuera del país, por personas distintas a esta empresa. En ese sentido, su información puede ser compartida con otras agencias inmobiliarias pertenecientes a la Asociación Mexicana de Profesionales Inmobiliarios, A.C., para la oferta de bienes inmuebles. Si usted no manifiesta su oposición para que sus datos personales sean transferidos, se entenderá que ha otorgado su consentimiento para ello.

No consiento que mis datos personales sean transferidos en los términos que señala el presente aviso de privacidad.
Si usted desea dejar de recibir mensajes promocionales de nuestra parte puede solicitarlo a través de los teléfonos en MEXICO D.F. (55) 5559-27-00, en PUEBLA (222) 169-17-18, o bien al correo electrónico  protecciondedatos@ideasinmobiliarias.com .
Cualquier modificación a este aviso de privacidad podrá consultarla en www.ideasinmobiliarias.mx
Actualización al 01/01/2015
</p>
<h5 class="ocultar" id="boton_menu_close" style="display:none;">Cerrar aviso</h5>
</section>
<? include("php/tracking.php");?>
</body>
<? include("html/bottom.php");?>
</html>
