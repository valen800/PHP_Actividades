<?php
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

    // Utils DB
    $numPages = getNumPage($db);
    $currentPage = 1;

    function getList($db) {
        // We make the query
        $query = "SELECT id, nom, cognoms FROM contactes LIMIT 0,5";
        $result = mysqli_query($db, $query);
        checkErrorDatabase('Failed to make the query', $db);

        return $result;
    }

    function getNumPage($db) {
        $query = "SELECT id, nom, cognoms FROM contactes";
        $result = mysqli_query($db, $query);
        checkErrorDatabase('Failed to make the query', $db);

        $numRows = $result->num_rows;
        $numPages = $numRows / MAX_ROWS;

        return $numPages;
    }
?>