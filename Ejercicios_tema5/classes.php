<?php

class Statistics {
    private static $mostra = array();

    public function __construct($mostra) {
        $this->mostra = $mostra;
    }

    public function setMostra($mostra) {
        $this->mostra = $mostra;
    }

    public function getMostra() {
        return $this->mostra;
    }

    public function getNumElements() {
        return count($this->mostra);
    }

    public function getMitja() {
        $arrayMostra = $this->mostra;
        $arrayLenght = count($arrayMostra);
        $total = 0;

        foreach ($arrayMostra as $key => $value) {
            $total += $value;
        }
        $average = $total / $arrayLenght;

        return $average;
    }

    public function getDesvTipica() {
    }
}
/* https://gist.github.com/evilnapsis/b9640384d3a56641441948d4ccf37d81 */
?>