<?php 
    function getListPosts() {
        $path = "./posts";
        $ficheros = array_diff(scandir($path), array('..','.'));
        
        $result .= "<ul>\n";

        foreach ($ficheros as $key => $value) {
            $result .=  '<li><a href="verpost.php?nombre='.urlencode($value).'">'.$value.'</a></li>';
        }

        $result .= "</ul>\n";

        return $result;
    }
?>