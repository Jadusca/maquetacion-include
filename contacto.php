<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maquetación con Include</title>
  <link rel="stylesheet" href="estilo3.css">
  <script type="text/javascript">
    function validar_envio(){
      if(document.formulario.email.value.length==0){
        alert("Please attach your email")
        document.formulario.email.focus()
        return 0;
      }
      if(document.formulario.services.value.length==0){
        alert("Please write the services")
        document.formulario.services.focus()
        return 0;
      }
      if(document.formulario.telefono.value.length==0){
        alert("Please write your phone number")
        document.formulario.telefono.focus()
        return 0;
      }
      if(document.formulario.time.value.length==0){
        alert("Please write the time")
        document.formulario.time.focus()
        return 0;
      }
      document.formulario.submit();
    }
  </script>
</head>
<body>

<?php
  include "encabezado.php";
?>

<?php
  include "menu.php";
?>
<!--  -->

<div class="frase3">
  <h1>Request now</h1>
</div>
<br><br><br><br>

<div class="fraseInicio">
<h2>Beautifully designed, print-ready massage gift certificate</h2>
<br>
<p>Leave your personal data, phone, select the desirable service
    <br>
    and suitable time. Leave a request and check the email.
  </p>
</div>
<br><br>
<div class="formulario">
<form action="" method="post" name="formulario">
  <div class="Form">
  <div class="columna1_formulario">
  <input type="email" name="email" placeholder="Enter your email:" required>
  <br><br><br>
  <input type="text" name="services" placeholder="Select services">
  </div>
  <div class="columna2_formulario">
  <input type="tel" name="telefono" placeholder="Enter your phone" maxlength="10">
  <br><br><br>
  <input type="text" name="time" placeholder="Select time:">
  </div>
  </div>
  <br><br>
  <div class="botonEnvio">
  <input type="button" value="Leave a Request" id="Enviar" onclick="validar_envio()">
  <br><br><br>
  </div>
</form>
</div>
<br><br><br><br><br>
<!--  -->
<?php
  include "pie.php";
?>

</body>
</html>