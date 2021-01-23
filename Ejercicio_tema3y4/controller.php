<?php
    include_once "./Classes/SQLDatabase.php";
    include_once "./Classes/Constants.php";

    $database = new SQLDatabase();
    $conn = $database->connection();

    // Dynamic Limit
    $limit = Constants::$MAX_ROWS_PAGE;
    // Get Data
    $data = $database->query("SELECT id FROM contactes");
    $numRows = $data->num_rows;
    // Calculate total pages
    $totalPages = ceil($numRows / $limit);
    
    // Current pagination page number
    $page = (isset($_GET['page']) && is_numeric($_GET['page']) ) ? $_GET['page'] : 1;
    $paginationStart = ($page - 1) * $limit;

    // Limit query
    $data = $database->query("SELECT id,nom,cognoms FROM contactes LIMIT $paginationStart,$limit");


    // Disconnect database
    $database->disconnect();

?>