<?php
    include_once "Paginator.php";

    class Render {
        
        public static function renderData() {
            $paginator = new Paginator();
            // param true is for convert stdObject to array
            $arr = json_decode($paginator->getData(), true);
            

            foreach ($arr as $key => $value) {
                echo '<tr>';
                echo '<td>'.$value['id'].'</td>';
                echo '<td>'.$value['nom'].' '.$value['cognoms'].'</td>';
                echo '</tr>';
            }
        }
    }
//https://steemit.com/utopian-io/@alfarisi94/pagination-with-php-oop-system-1-basic-oop-class-fetch-data-with-pdo-database-use-function-in-a-class

?>
