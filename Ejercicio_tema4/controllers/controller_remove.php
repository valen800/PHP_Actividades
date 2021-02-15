<?php
include_once '../Classes/SQLDatabase.php';

    $conn = new SQLDatabase();

    $conn->connection();
    if ($conn->delete($_GET['id'])) {
        echo "Dato insertado";
    }
    $conn->disconnect();

    header('Location:../index.php');
    exit;

?>