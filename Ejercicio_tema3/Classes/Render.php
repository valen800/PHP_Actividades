<?php
    include_once "Paginator.php";

    class Render {
        
        public static function renderData() {
            $paginator = new Paginator();
            $arr = json_decode($paginator->getData(), true);
            
            foreach ($arr as $key => $arr2) {
                foreach ($arr2 as $key => $value) {
                    print_r($value);
                }
            }
        }
    }
//https://steemit.com/utopian-io/@alfarisi94/pagination-with-php-oop-system-1-basic-oop-class-fetch-data-with-pdo-database-use-function-in-a-class

?>
