<?php

$age = 4;

switch ($age){
    case 4:
        echo "tu as 4 ans";
        break;
    case 15:
        echo "tu as 16ans";
        break;
}

if ($age = 4) {
    echo 'tu as 4 ans';
} else{
    echo 'tu n\'as pas 4 ans';
}

// l'operateur Ternaire

echo ($age == 4) ? "Tu as 4 ans" : "Tu n'as pas 4 ans" ;

?>