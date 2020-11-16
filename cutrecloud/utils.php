<?php 

function getListMedia($typeMedia) {
    $path = './media/'.$typeMedia.'/';
    $ficheros = array_diff(scandir($path), array('..','.'));

    $result .= '<ul>'.PHP_EOL;

    foreach ($ficheros as $key => $value) {
        $result .=  '<li>'.PHP_EOL;
        $result .= '<p>'.$value.'</p>'.PHP_EOL;
        $result .= '</li>'.PHP_EOL;
    }

    $result .= '</ul>'.PHP_EOL;

    return $result;
}

?>