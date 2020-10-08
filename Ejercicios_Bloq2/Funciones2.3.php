<style>
    table, th, td {
    border: 1px solid black;
    }
</style>

<?php
    $directory="./fotos";
    $dirint = dir($directory);
    $cc = 0;

?>
<table class="table">
<h1>Tabla de Fotos con Enlace</h1>
<tr>
<?php
    while (($archivo = $dirint->read()) !== false) {
        if (strpos($archivo,"gif") || strpos($archivo,"jpg") || strpos($archivo,"png") || strpos($archivo,"bmp")) {
            echo '<td><a href="'.$directory."/".$archivo.'" target="_blank"><img height="100" width="100" src="'.$directory."/".$archivo.'"></a></td>';
            $cc++;

            if ($cc == 4) {
                echo "<tr></tr>";
                $cc = 0;
            }
        }
    }
    $dirint->close();
?>
</tr>
</table>
