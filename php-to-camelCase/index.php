<?php
function toCamelCase($str){
    $array = str_split($str);
    $camelCase = [];
    $z = 0;
    $lastDigit = false;
  
    foreach($array as $letter){
        if (ctype_alpha($letter)){
            if ($lastDigit === true){
                $letter = strtoupper($letter);
                $lastDigit = false;
            }
    
        if (!isset($camelCase[$z])){
            $camelCase[$z] = "";
        }
            $camelCase[$z] .= $letter;
        } else {
            $lastDigit = true;
            $z++;
        }
    }
  
    return implode("", $camelCase);
  
}

echo toCamelCase("the-stealth-warrior");
/* esplodo stringa in array
z = 0;
ciclo per ogni elemento dell array
  se è una lettera pusho in una stringa nella posizione z dell array
  se non lo è aumento z di 1
nell array in tutte le posizioni tranne 0 metto prima lettera maiuscola
ciclo per ogni elemento dell array
  lo pusho in una stranga
ritorno la stringa
*/