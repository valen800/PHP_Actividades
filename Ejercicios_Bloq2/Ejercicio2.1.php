<style>
    td {
        border: 1px solid grey;
        padding: 5px;
    }
</style>

<?php
    const COLLENGHT = 11;
    const ROWLENGHT = 10;
    $blue = "#0000FF";
    $red = "#ff2d00";

    $col = 23;
    $row = 1;

    $colDiv = 23;
    $rowDiv = 1;
?>

    <table class="table">
        <tr>
        <td>/</td>

<?php
    for ($i = 0; $i < COLLENGHT; $i++) {
        echo '<td>'.$col.'</td>'.PHP_EOL;
        $col++;
    }

    for ($i = 0; $i < ROWLENGHT; $i++) {
        $colDiv = 23;
        echo "<tr>".PHP_EOL;
        echo "<td>".$row."</td>".PHP_EOL;
        $row++;

        for ($j = 0; $j < COLLENGHT; $j++) {
            if ($colDiv % $rowDiv == 0) {
                echo '<td style="background-color:'.$blue.';">*</td>'.PHP_EOL;
            } else {
                echo '<td style="background-color:'.$red.';">-</td>'.PHP_EOL; 
            }
            $colDiv++;
        }
        echo "</tr>".PHP_EOL;
        $rowDiv++;
    }

?>
        </tr>
    </table>