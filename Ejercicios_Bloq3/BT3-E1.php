<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT3-E1</title>
</head>

<body>
    <h2>Salutacions!</h2>
    <hr style="width:50%;text-align:left;margin-left:0">
    <form action="validateForm()">
        <label for="IText">Introduce el texto a mostrar:</label>
        <input type="text" id="IText" name="IText"/><br />
        <label for="fname">Alinear texto:</label>
        <input type="radio" name="" value="Izquierda" checked /><label for="fname">Izquierda</label>
        <input type="radio" name="" value="Centro" /><label for="fname">Centro</label>
        <input type="radio" name="" value="Derecha" /><label for="fname">Derecha</label><br/><br/>
        <input type="submit" value="Aceptar">
    </form>
</body>
</html>

<?php

function validateForm() {
    echo 'validado';
}

?>