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
            $inputDolares = $_POST['inputDolares'];
            $inputLibras = $_POST['inputLibras'];
            $inputCantidad = $_POST['inputCantidad'];
            $inputResultado = 0;
            $divisasCantidad = $_POST['divisasCantidad'];
            $divisasResultado = $_POST['divisasResultado'];
            $divisasArray = [
                'dolar' => $inputDolares, 
                'euro' => 1, 
                'libra' => $inputLibras];

            if ($divisasCantidad == $divisasResultado) {
                $inputResultado = $inputCantidad;
            }
            
            foreach ($divisasArray as $key => $value) {

                if ($divisasCantidad == $key) {
                    $primeraDivisaValor = $value;
                }
                if ($divisasResultado == $key) {
                    $segundaDivisaValor = $value;
                }
            }

            
            
        ?>
        <div>
            <form name="formulario" method="post" action="BT3-E4.php">
                <fieldset>
                    <legend>Cambio de divisas tomando el euro como referencia</legend>
                    <label for="fname">1 euro</label>
                    <input type="number" id="inputDolares" name="inputDolares" value="1.271640">
                    <label for="fname">dólares</label>
                    <br>
                    <label for="fname">1 euro</label>
                    <input type="number" id="inputLibras" name="inputLibras" value="0.799778">
                    <label for="fname">libras</label>
                    <br>
                    <label for="fname">Cantidad:</label>
                    <input type="number" id="inputCantidad" name="inputCantidad" value="<?php echo $inputCantidad ?>">
                    <label for="fname">en</label>
                    <select name="divisasCantidad" id="divisasCantidad">
                        <option value="dolar" <?php if($divisasCantidad == 'dolar') echo "selected" ?> >dólares</option>
                        <option value="euro" <?php if($divisasCantidad == 'euro') echo "selected" ?> >euros</option>
                        <option value="libra" <?php if($divisasCantidad == 'libra') echo "selected" ?>>libras</option>
                    </select>
                    <label for="fname">=> Cantidad:</label>
                    <input type="number" id="inputResultado" name="inputResultado" disabled value="<?php echo $inputResultado?>">
                    <label for="fname">en</label>
                    <select name="divisasResultado" id="divisasResultado">
                        <option value="dolar" <?php if($divisasResultado == 'dolar') echo "selected" ?> >dólares</option>
                        <option value="euro" <?php if($divisasResultado == 'euro') echo "selected" ?> >euros</option>
                        <option value="libra" <?php if($divisasResultado == 'libra') echo "selected" ?>>libras</option>
                    </select>
                    <br><br>
                    <input type="submit" value="Aceptar">
                </fieldset>
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
    fieldset { 

    }
    div {
        margin: 10px;
    }
    label {
        margin-left: 5px;
    }
</style>