<?php
    if (isset($_REQUEST['upload'])) {
        handleUploadRequest();
    } else {
        header("Location: index.php");
    }

    function handleUploadRequest() { 
        //$sizeFile = isset($_FILES["inputFile"]["size"]) / 1024; //KB
        $tmpFile = $_FILES["inputFile"]["tmp_name"];

        $path = checkFileTag();

        if (move_uploaded_file($tmpFile, $path)) {
            echo "Archivo subido correctamente";
            header("Location: index.php");
        } else {
            echo "Error al subir el archivo";
            header("Location: index.php");
        }
    }

    function checkFileTag() {
        $nameFile = $_FILES["inputFile"]["name"];
        $typeFile = $_FILES["inputFile"]["type"];
        echo $typeFile;
        $id = time();

        switch ($typeFile) {
            case 'audio/mp3':
                return 'media/audio/'.$id.$nameFile;
                break;
            case 'image/png':
                return 'media/images/'.$id.$nameFile;
                break;
            case 'video/mp4':
                return 'media/video/'.$id.$nameFile;
                break;
            default:
                echo "No se permite esta extension";
                break;
        }
    }
?>