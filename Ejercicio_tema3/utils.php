<?php

function getList($result, $db) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>'.$row['id'].'</td>';
            echo '<td>'.$row['nom'].'</td>';
            echo '<td>'.$row['cognoms'].'</td>';
            echo '<tr>';
        }
    }
    mysqli_free_result($result);
    mysqli_close($db);
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