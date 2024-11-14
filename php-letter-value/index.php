<?php 
function wordsToMarks(string $str): int {
    $arrayStr = str_split(strtolower($str));
    $lettersValue = [
        'a' => 1,
        'b' => 2,
        'c' => 3,
        'd' => 4,
        'e' => 5,
        'f' => 6,
        'g' => 7,
        'h' => 8,
        'i' => 9,
        'j' => 10,
        'k' => 11,
        'l' => 12,
        'm' => 13,
        'n' => 14,
        'o' => 15,
        'p' => 16,
        'q' => 17,
        'r' => 18,
        's' => 19,
        't' => 20,
        'u' => 21,
        'v' => 22,
        'w' => 23,
        'x' => 24,
        'y' => 25,
        'z' => 26
    ];
    $value = 0;
        foreach($arrayStr as $letter){
            $value += $lettersValue[$letter];
        }
    return $value;
}
echo wordsToMarks("pikachu");
    /* esplodo la stringa e la trasformo in array
    ogni variabile dell array corrisponde ad una chiave nell array dei valori
    aggiungo il valore della chiave ad una variabile
    ritorno la variabile
    */