<style>
    table{
    border: 1px solid black;
    padding: 20px;
}
</style>

<table >
<tr>
<td>
<h1>Clasificacion del mundial de Formula 1:</h1>
<?php
    $clasificacion['Alonso']['Valencia']=1;
    $clasificacion['Hamilton']['Valencia']=4;
    $clasificacion['Massa']['Valencia']=2;
    $clasificacion['Raikonen']['Valencia']=3;
    $clasificacion['Alonso']['China']=1;
    $clasificacion['Hamilton']['China']=4;
    $clasificacion['Massa']['China']=2;
    $clasificacion['Raikonen']['China']=3;
    $clasificacion['Alonso']['Brasil']=1;
    $clasificacion['Hamilton']['Brasil']=4;
    $clasificacion['Massa']['Brasil']=2;
    $clasificacion['Raikonen']['Brasil']=3;

    foreach ($clasificacion as $piloto => $paises) {
        $puntuacionPiloto = 0;
        foreach ($paises as $zona => $value) {
            switch ($value) {
                case 1:
                    $puntuacionPiloto += 10;
                    break;
                case 2:
                    $puntuacionPiloto += 8;
                    break;
                case 3:
                    $puntuacionPiloto += 7;
                    break;
                case 4:
                    $puntuacionPiloto += 6;
                    break;        
                default:
                    break;
            }
        }
        $pilotosPuntuaciones[$piloto] = $puntuacionPiloto;
        arsort($pilotosPuntuaciones);
    }

    foreach ($pilotosPuntuaciones as $key => $value) {
        echo $key." = ".$value." puntos <br>".PHP_EOL;
    }


?>
</td>
</tr>
</table>