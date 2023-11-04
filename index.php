<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maquetación con Include</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>

<?php
  include "encabezado.php";
?>

<?php
  include "menu.php";
?>

  <div class="banner">
  <div class="titulo">
    <br><br><br><br><br><br><br><br><br><br>
  <h1>Relaxation</h1><br>
  <p>come to us right now</p>
  <br><br>
  <a href="#">Book Now</a>
  </div>
  </div>

  <div class="descripcion">
    <br>
    <h2>Plunge into the world of <br> relaxation with us</h2> <br>
    <p>We invite you to visit the spa paradise and feel the power of relaxation <br> The unique experts will do their best for you</p>
    <br><br>
  </div>

  <div class="conte-tres">
    <div class="primero">
      <img class="foto1" src="imagenes/foto1.jpg" alt="">
<div class="info1">
<br>
      <h2>High-quality services</h2>
      <br>
      <p>The best receptionists will put you through the <br> world of potiteness, professiinalism, deep <br> calmness and high-quility services</p>
</div>
    </div>
    <div class="segundo">
      <img class="foto2" src="imagenes/foto2.jpg" alt="">
      <div class="info1">
        <h2>Paradise atmosphere</h2>
        <br>
        <p>Feel the wonderfull atmosphere of beauty, <br> pleasant colors, tasty aromas and feel free to <br> have a relax</p>
      </div>
    </div>
    <div class="tercero">
      <img class="foto3" src="imagenes/foto3.jpg" alt="">
      <div class="info1">
        <h2>Massage to any taste</h2>
        <br>
        <p>Get the qualified treatment in a most <br> preferable wat. Trust our experts and <br> experience the best massage</p>
      </div>
    </div>
  </div>

  <br><br><br><br><br>

<?php
  include "pie.php";
?>

</body>
</html>