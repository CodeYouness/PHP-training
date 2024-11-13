<?php 
function cats(int $start, int $finish): int {
    $arrived = false;
    for ($jump=0; $arrived === false; $jump++){
        if ($start + 3 < $finish){
            $start += 3;
        } elseif ($start + 3 === $finish){
            return $jump + 1;
        } elseif ($start + 1 < $finish){
            $start += 1;
        } elseif ($start + 1 === $finish){
            return $jump + 1;
        } elseif ($start === $finish){
            return $jump;
        }
    }
}
echo cats(0,5);
/* start = 0
    end = 10
ciclo for con: jump=0; arrived = false; jump++
    se start + 3 < end 
        allora start = start + 3
    altrimenti start + 1 < end
        allora start = start + 1
    altrimenti start + 3 = end
        allora arrived = true

arrived = true
return jump */
    