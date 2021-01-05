<?php

    $dbServerName = 'localhost';
    $username = 'phpmyadmin';
    $password = 'phpmyadmin';

    // Connect to databse
    $db = mysqli_connect($dbServerName, $username, $password);
    checkConnectionDatabase('Failed to connect to database');

    // Select database
    mysqli_select_db($db, 'agenda');
    checkErrorDatabase('Failed to select the database', $db);

    // We make the query
    $query = "SELECT id, nom, cognoms FROM contactes";
    $result = mysqli_query($db, $query);
    checkErrorDatabase('Failed to make the query', $db);

?>