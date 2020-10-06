<style>
    td {
        border: 1px solid grey;
        padding: 5px;
    }
</style>

<?php
    const ROWLENGHT = 11;
    const COLLENGHT = 10;

    $row = 23;
    $col = 1;

    $rowDiv = 22;
    $colDiv = 1;

?>

    <table class="table">
        <tr>
        <td>/</td>

<?php
    for ($i = 0; $i < ROWLENGHT; $i++) {
        echo '<td>'.$row.'</td>';
        $row++;
    }

    for ($i = 0; $i < COLLENGHT; $i++) {
        echo "<tr>";
        echo "<td>".$col."</td>";
        $col++;

        for ($j = 0; $j < ROWLENGHT; $j++) {
            if ($rowDiv % $colDiv == 0) {
                echo "<td>*</td>";
            } else {
                echo "<td>-</td>";
            }
            $rowDiv++;
        }
        echo "</tr>";
        $colDiv++;
    }

?>
        </tr>
    </table>