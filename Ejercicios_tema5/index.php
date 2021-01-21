<?php
    require_once 'classes.php';

    $array = array(2,3,2,2,5,3,8,1,4);
    $array2 = array(5,5,4,3,2,2,1,7,6);

    $statistics = new Statistics($array);

    echo "Array 1: ";
    foreach ($statistics->getMostra() as $key => $value) {
        echo $value."\n";
    }

    $statistics->setMostra($array2);

    echo " || Array 2: ";
    foreach ($statistics->getMostra() as $key => $value) {
        echo $value."\n";
    }

    print_r("|| Número de elementos: ".$statistics->getNumElements());

    print_r(" || Media: ".$statistics->getMitja());

    print_r(" || Desv tipica: ".$statistics->getDesvTipica());


?>