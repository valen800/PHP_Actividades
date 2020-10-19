<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <div class="container">
    <?php
        $text = $_POST['inputText'];
        $direccion = $_POST['direccion'];

        if (isset($text) && isset($direccion)) {
            echo '<div style="width:50%;text-align:left;margin-left:0">';
                echo '<h2 style="text-align:'.$direccion.'">'.$text.'</h2>';
            echo '</div>';
        } 
    ?>
    
        <hr style="width:50%;text-align:left;margin-left:0">
        <form name="formulario" method="post" action="BT3-E1.php">
            <label for="IText">Introduce el texto a mostrar:</label>
            <input type="text" id="inputText" name="inputText" /><br />
            <label for="fname">Alinear texto:</label>
            <input type="radio" name="direccion" value="left" checked /><label for="fname">Izquierda</label>
            <input type="radio" name="direccion" value="center" /><label for="fname">Centro</label>
            <input type="radio" name="direccion" value="right" /><label for="fname">Derecha</label><br /><br />
            <input type="submit" value="Aceptar">
        </form>
    </div>
</body>

</html>