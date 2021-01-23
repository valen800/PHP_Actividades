<?php

/* function getNumPage($db) {

    $query = "SELECT id, nom, cognoms FROM contactes";
    $resultQuery = mysqli_query($db, $query);
    checkErrorDatabase('Failed to make the query', $db);

    $numRows = $resultQuery->num_rows;
    $numPages = ceil($numRows / MAX_ROWS);

    return $numPages;
} */

/* function getList($db, $start, $end) {
    // We make the query

    $query = "SELECT id, nom, cognoms FROM contactes LIMIT $start,$end";
    $list = mysqli_query($db, $query);
    checkErrorDatabase('Failed to make the query', $db);

    return $list;
} */

/* function printList($result, $db) {
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
} */

?>