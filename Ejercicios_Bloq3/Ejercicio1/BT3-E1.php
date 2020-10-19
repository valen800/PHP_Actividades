<?php
    $text = $_POST['inputText'];
    $direccion = $_POST['direccion'];

    if (isset($text) && isset($direccion)) {
        echo '<div style="width:50%;text-align:left;margin-left:0">';
            echo '<h2 style="text-align:'.$direccion.'">'.$text.'</h2>';
        echo '</div>';
    } 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT3-E1</title>
</head>

<body>
    <hr style="width:50%;text-align:left;margin-left:0">
    <form name="formulario" method="post" action="BT3-E1.php">
        <label for="IText">Introduce el texto a mostrar:</label>
        <input type="text" id="inputText" name="inputText"/><br />
        <label for="fname">Alinear texto:</label>
        <input type="radio" name="direccion" value="left" checked /><label for="fname">Izquierda</label>
        <input type="radio" name="direccion" value="center" /><label for="fname">Centro</label>
        <input type="radio" name="direccion" value="right" /><label for="fname">Derecha</label><br/><br/>
        <input type="submit" value="Aceptar">
    </form>
</body>
</html>