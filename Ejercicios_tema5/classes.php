<?php

class Statistics {
    private $mostra = array();

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
        $arrayMostra = $this->mostra;
        $arrayLenght = count($arrayMostra);
        $mitja = self::getMitja();
        $total = 0;

        foreach ($arrayMostra as $key => $value) {
            $total += ($value - $mitja) * ($value - $mitja);
        }

        $varianza = $total / $arrayLenght;
        $desvTipica = sqrt($varianza);

        return $desvTipica;
    }
}
?>