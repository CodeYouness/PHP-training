<?php  
function calculate_speed($distance, $time) {
    $distanceArray = separator($distance);
    $timeArray = separator($time);
    
    if($distanceArray[1] === "km") {
      $distanceArray[0] *= 1000;
    }
    
    if($timeArray[1] === "min") {
      $timeArray[0] *= 60;
    } elseif($timeArray[1] === "h") {
      $timeArray[0] *= 3600;
    }


    $result = intval($distanceArray[0]) / intval($timeArray[0]) * 2.23694;
    
    return round($result) . "mph";
}

function separator($var) {
    
    $array = str_split($var);

    $num = [];
    $letters = [];
    
    foreach($array as $unit) {
        if (is_numeric($unit)){
            $num[] = $unit;
        } else {
            $letters[] = $unit;
        }
    }
    
    $number = implode("", $num);
    $measure = strtolower(implode("", $letters));

    return [$number, $measure];
}

echo calculate_speed("100m", "10s");
  
/*  Per la distanza:
    esplodo la stringa e trasformo in array
        ciclo per ogni lettera o numero e:
            se è numero lo aggiungo alla variabile valore
            se è lettera lo aggiungo alla variabile unità di misura

    Per la velocità ripeto la stessa cosa

        se l unita di misura della distanza è "km"
            allora moltiplico la variabile valore per 1000
        se l unita di misura del tempo è "m"
            allora moltiplico la variabile tempo per 60
        se l unita di misura del tempo è "h"
            allora moltiplico la variabile per 3600

    infine distanza/tempo * 2.23694
    ritorno risultato + mph
*/