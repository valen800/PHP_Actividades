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
    
    if (isset($_GET['currentPage'])) {
        switch ($_GET['currentPage']) {
            case 'next':
                if ($currentPage == $numPages) {
                    $currentPage = $numPages;
                } else {
                    $currentPage += 1;
                }
                break;
            case 'previous':
                if ($currentPage == 1) {
                    $currentPage = 1;
                } else {
                    $currentPage -= 1;
                }
                break;
            case 'last':
                $currentPage = $numPages;
                break;
            case 'first':
                break;
                $currentPage = 1;
            default:
            $currentPage = 1;
                break;
        }
    } else {
        $currentPage = 1;
    }
    
    $endRow = $currentPage * MAX_ROWS;

    if ($currentPage == 1) {
        $startRow = ($currentPage -1);
    } else {
        $startRow = $currentPage * $numPages;
    }

    echo 'start:'.$startRow.' end:'.$endRow;
    echo '  '.$currentPage;

    function getList($db, $start, $end) {
        // We make the query

        $query = "SELECT id, nom, cognoms FROM contactes LIMIT $start,$end";
        $list = mysqli_query($db, $query);
        checkErrorDatabase('Failed to make the query', $db);

        return $list;
    }

    function getNumPage($db) {

        $query = "SELECT id, nom, cognoms FROM contactes";
        $resultQuery = mysqli_query($db, $query);
        checkErrorDatabase('Failed to make the query', $db);

        $numRows = $resultQuery->num_rows;
        $numPages = ceil($numRows / MAX_ROWS);

        return $numPages;
    }
?>