<?php 
    function getListPosts() {
        $path = "./posts";
        $ficheros = array_diff(scandir($path), array('..','.'));
        
        $result .= '<ul>'.PHP_EOL;

        foreach ($ficheros as $key => $value) {
            $result .=  '<li>'.PHP_EOL;
            $result .= '<a href="verpost.php?nombre='.urldecode($value).'">'.$value.'</a>'.PHP_EOL;
            $result .= '<a href="borrar.php?nombre='.urldecode($value).'""> Borrar </a>'.PHP_EOL;
            $result .= '<a href="editar.php?nombre='.urldecode($value).'""> Editar </a>'.PHP_EOL;
            $result .= '</li>'.PHP_EOL;
        }

        $result .= '</ul>'.PHP_EOL;

        return $result;
    }

    function getPostHTML() {
        $file = $_GET['nombre'];
        $path = './posts/'.$file;
        $contenido = file_get_contents($path);

        $result .= '<h1>Nombre del POST: '.$file.'</h1>'.PHP_EOL;

        $result .= '<p>Contenido: '.$contenido.'</p>'.PHP_EOL;

        return $result;
    }

    function deletePost() {
        $file = $_GET['nombre'];
        $path = './posts/'.$file;

        unlink($path);
        header('location: index.php');
    }

    function editPost() {

    }
?>