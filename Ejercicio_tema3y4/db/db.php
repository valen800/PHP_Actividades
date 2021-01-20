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

    $numPages = getNumPage($db);
    $currentPage = 1;
    
    //------------------INDEX--------------------//
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
                $currentPage = 1;
                break;

            default:
                # code...
                break;
        }
    }
    
    //-------------------LIMIT VARIABLES------------//

    $startRow = ($currentPage - 1) * MAX_ROWS;
    $endRow = $currentPage * MAX_ROWS;

    echo 'start:'.$startRow.' end:'.$endRow;
    echo '  '.$currentPage;
?>