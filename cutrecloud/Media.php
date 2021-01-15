<?php 

class Media {

    public static function getListMedia($typeMedia) {

        switch ($typeMedia) {
            case 'audio':
                echo self::getAudios();
                break;
            case 'video':
                echo self::getVideos();
                break;
            case 'image':
                echo self::getImages();
                break;            
            default:
                return '';
                break;
        }
    
    }

    private static function getImages() {
        $path = './media/image/';
        $ficheros = array_diff(scandir($path), array('..','.'));

        $imageList = '';
    
        foreach ($ficheros as $key => $value) {
            $imageList .= '<img src="'.$path.$value.'" class="img-rounded" alt="img">'.PHP_EOL;
        }

        return $imageList;
    }

    private static function getVideos() {
        $path = './media/video/';
        $ficheros = array_diff(scandir($path), array('..','.'));

        $videoList = '';
    
        foreach ($ficheros as $key => $value) {
            $videoList .= '<video width="320" height="240" controls>'.PHP_EOL;
            $videoList .= '<source src="'.$path.$value.'" type="video/mp4">'.PHP_EOL;
            $videoList .= '</video>'.PHP_EOL;
        }

        return $videoList;
    }

    private static function getAudios() {
        $path = './media/audio/';
        $ficheros = array_diff(scandir($path), array('..','.'));

        $audiolist = '';
    
        foreach ($ficheros as $key => $value) {
            $audiolist .= '<audio controls>'.PHP_EOL;
            $audiolist .= '<source src="'.$path.$value.'" type="audio/mpeg">'.PHP_EOL;
            $audiolist .= '</audio>'.PHP_EOL;
        }

        return $audiolist;
    }
}

?>