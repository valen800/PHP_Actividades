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
            $inputEuroDolares = number_format($_POST['inputDolares'], 2, ".", '');
            $inputEuroLibras = number_format($_POST['inputLibras'], 2, ".", '');

            $inputCantidad = number_format($_POST['inputCantidad'], 2, ".", '');
            $inputResultado = 0;

            $divisasCantidad = $_POST['divisasCantidad'];
            $divisasResultado = $_POST['divisasResultado'];

            $euro_usd = $inputEuroDolares;
            $euro_libra = $inputEuroLibras;
            $usd_euro = 0.85;
            $usd_libra = 0.77;
            $libra_euro = 1.11;
            $libra_usd = 1.30;

            if ($inputCantidad == "") {
                $inputCantidad = 0;
            }

            if ($inputCantidad == 0) {
                $inputResultado = 0;
            }

            if ($divisasCantidad == $divisasResultado) {
                $inputResultado = $inputCantidad;
            }

            switch ($divisasCantidad && $divisasResultado) {
                case $divisasCantidad == 'EUR' && $divisasResultado == 'USD':
                    $inputResultado = $inputCantidad * $euro_usd;
                    break;
                case $divisasCantidad == 'EUR' && $divisasResultado == 'LIBRA':
                    $inputResultado = $inputCantidad * $euro_libra;
                    break;
                case $divisasCantidad == 'USD' && $divisasResultado == 'EUR':
                    $inputResultado = $inputCantidad * $usd_euro;
                    break;     
                case $divisasCantidad == 'USD' && $divisasResultado == 'LIBRA':
                    $inputResultado = $inputCantidad * $usd_libra;
                    break;
                case $divisasCantidad == 'LIBRA' && $divisasResultado == 'EUR':
                    $inputResultado = $inputCantidad * $libra_euro;
                    break;
                case $divisasCantidad == 'LIBRA' && $divisasResultado == 'USD':
                    $inputResultado = $inputCantidad * $libra_usd;
                    break;
                default:
                    break;
            }
            $inputResultado = number_format($inputResultado, 2, ".", '');
        ?>

        <div>
            <form name="formulario" method="post" action="BT3-E4.php">
                <fieldset>
                    <legend>Cambio de divisas tomando el euro como referencia</legend>
                    <label for="fname">1 euro</label>
                    <input type="number" id="inputDolares" name="inputDolares" step="any" value="1.271640">
                    <label for="fname">dólares</label>
                    <br>
                    <label for="fname">1 euro</label>
                    <input type="number" id="inputLibras" name="inputLibras" step="any" value="0.799778">
                    <label for="fname">libras</label>
                    <br>
                    <label for="fname">Cantidad:</label>
                    <input type="number" id="inputCantidad" name="inputCantidad" step="any" value="<?php echo $inputCantidad ?>">
                    <label for="fname">en</label>
                    <select name="divisasCantidad" id="divisasCantidad">
                        <option value="USD" <?php if($divisasCantidad == 'USD') echo "selected" ?> >dólares</option>
                        <option value="EUR" <?php if($divisasCantidad == 'EUR') echo "selected" ?> >euros</option>
                        <option value="LIBRA" <?php if($divisasCantidad == 'LIBRA') echo "selected" ?>>libras</option>
                    </select>
                    <label for="fname">=> Cantidad:</label>
                    <input type="number" id="inputResultado" name="inputResultado" disabled value="<?php echo $inputResultado?>">
                    <label for="fname">en</label>
                    <select name="divisasResultado" id="divisasResultado">
                        <option value="USD" <?php if($divisasResultado == 'USD') echo "selected" ?> >dólares</option>
                        <option value="EUR" <?php if($divisasResultado == 'EUR') echo "selected" ?> >euros</option>
                        <option value="LIBRA" <?php if($divisasResultado == 'LIBRA') echo "selected" ?>>libras</option>
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