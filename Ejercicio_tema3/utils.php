<?php

function getList($result, $numberRow) {
    $count = 0;

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($count < $numberRow) {
                echo '<tr>';
                echo '<td>'.$row['id'].'</td>';
                echo '<td>'.$row['nom'].'</td>';
                echo '<td>'.$row['cognoms'].'</td>';
                echo '<tr>';
                $count += 1;
            }
        }
    }
}

function checkConnectionDatabase($message) {
    if (mysqli_connect_errno() != 0) {
        echo $message.': '.mysqli_connect_error();
        exit();
    }
}

function checkErrorDatabase($message, $connection) {
    if (mysqli_errno($connection) != 0) {
        echo $message.': '.mysqli_errno($connection);
        mysqli_close($connection);
        exit();
    }
}

?>