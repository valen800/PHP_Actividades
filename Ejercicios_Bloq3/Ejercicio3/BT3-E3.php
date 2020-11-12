<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <?php
            $nameGif = $_FILES["inputFile"]["name"];
            $size = $_FILES["inputFile"]["size"] / 1024;
            $type = $_FILES["inputFile"]["type"];
            $tmp_file = $_FILES["inputFile"]["tmp_name"];

            if ($_FILES["inputFile"]["error"] != UPLOAD_ERR_OK) {
                echo 'Error: ';
                switch ($_FILES["inputFile"]["error"]) {
                    case UPLOAD_ERR_INI_SIZE:
                    case UPLOAD_ERR_FORM_SIZE:
                        echo 'El fichero es demasiado grande';
                        break;
                    case UPLOAD_ERR_PARTIAL:
                        echo 'El fichero no se ha podido subir entero';
                        break;
                    case UPLOAD_ERR_NO_FILE:
                        echo 'No se ha podido subir el fichero';
                        break;
                    default: echo 'Error indeterminado.';
                        break;
                }
                exit;
            }

            if ($type != 'image/gif') {
                echo 'Error: No se trata de un fichero .GIF.';
                echo $type;
            }

            if ($size > 40) {
                echo 'Error: El fichero gif pesa más de 40KB.';
                exit;
            }

            if (is_uploaded_file($tmp_file) === true) {
                $nombre = './imatges/'.$nameGif;
                if (is_file($nombre) === true) {
                    $idUnico = time();
                    $nombre = $idUnico.'_'.$nombre;
                }

                if (move_uploaded_file($tmp_file, $nombre)) {
                    //Muestra la imagen
                    /* header("Content-type: image/gif");
                    $fp = fopen($nombre, 'rb');
                    $contenido = fread ($fp, filesize ($nombre));
                    fclose ($fp); 
                    echo $contenido; */
                    echo 'Se ha subido correctamente';
                } else {
                    echo 'Error: No se puede mover el fichero a su destino';
                }
            } else {
                echo 'Error: Posible ataque. Nombre: '.$nameGif;
            }
        ?>
        <div>
            <hr style="width:50%;text-align:left;margin-left:0">
            <h1 font-style></h1>
                <form name="formulario" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" 
                enctype="multipart/form-data">
                    <label>Pujar un arxiu al servidor</label><br><br>
                    <label>Buscar en:</label>
                    <input type="file" id="inputFile" name="inputFile" /><br><br>
                    <input type="submit" value="Enviar">
                </form>
        </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<style>
    div.container { 
        border-style: solid; 
        border-width: 1px;
    }

    div {
        margin: 10px;
    }
</style>