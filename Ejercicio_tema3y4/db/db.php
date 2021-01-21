<?php
    include_once "utils.php";

    define("DB_SERVERNAME","localhost");
    define("USERNAME","phpmyadmin");
    define("PASSWORD","phpmyadmin");
    define("MAX_ROWS","5");

    // Connect to databse
    $db = mysqli_connect(DB_SERVERNAME, USERNAME, PASSWORD);
    checkConnectionDatabase('Failed to connect to database');

    // Select database
    mysqli_select_db($db, 'agenda');
    checkErrorDatabase('Failed to select the database', $db);
?>