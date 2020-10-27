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
          $text = $_POST['inputText'];
          $styles = $_POST['format'];


          foreach ($styles as $style) {
            if ($style == "bold") {
              $bold = $style;
            }
            if ($style == "italic") {
              $italic = $style;
            }
            if ($style == "underline") {
              $underline = $style;
            }
          }

          echo '<h3 style="text-decoration: '.$underline.';font-style: '.$italic.';font-weight: '.$bold.';">'.$text.'</h3>';
          
      ?>
      <div>
      <hr style="width:50%;text-align:left;margin-left:0">
          <form name="formulario" method="post" action="BT3-E2.php">
              <label for="IText">Introduce el texto a mostrar:</label>
              <input type="text" id="inputText" name="inputText" value="<?php echo (isset($text) == true) ? $text : ''; ?>"/><br />
              <label for="fname">Alinear texto:</label>
              <input type="checkbox" name="format[]" value="bold" <?php if(isset($bold)) echo 'checked="checked"'; ?>/><label for="fname">Negrita</label>
              <input type="checkbox" name="format[]" value="italic" <?php if(isset($italic)) echo 'checked="checked"'; ?>/><label for="fname">Cursiva</label>
              <input type="checkbox" name="format[]" value="underline" <?php if(isset($underline)) echo 'checked="checked"'; ?>/><label for="fname">Subrayado</label><br /><br />
              <input type="submit" value="Aceptar">
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