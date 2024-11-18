<?php
function kebabize($string) {
    $array = str_split($string);
    $kebabize = "";
    foreach($array as $letter){
        if (ctype_lower($letter)){
            $kebabize .= strtolower($letter);
        } elseif (ctype_upper($letter)){
            $kebabize .= "-" . strtolower($letter);
        }
    }

    if (str_starts_with($kebabize, "-")){
        $kebabize = ltrim($kebabize, "-");
    }

    return $kebabize;
}

echo kebabize("GoToAKebab");

/* trasformo stringa in array
ciclo per ogni lettera
    se è lettera minuscola la aggiungo alla stringa
    se è maiuscola prima aggiungo "-" e poi la lettera ma minuscola
*/