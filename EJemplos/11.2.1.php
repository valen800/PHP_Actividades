<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
</head>

<body>
    <?php
echo "El dato1 es {$_GET['dato1']}<br/>";
echo "La dato2 es {$_GET['dato2']}<br/>";
?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        dato1:<input name="dato1" value="" type="text"><br />
        dato2:<input name="dato2" value="" type="text"><br />
        <input name="aceptar" value="Aceptar" type="submit">
    </form>
</body>

</html>