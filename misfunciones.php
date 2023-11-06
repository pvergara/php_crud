<?php
function generaTabla ($filas, $columnas){
    echo '<table >';
    for ($i=0; $i<$filas; $i++){
        echo "<tr>";
        for($j=0; $j<$columnas; $j++){
            echo "<td> $columnas[$i][$j] </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

