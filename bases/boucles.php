<?php

$repetition  = 0;

echo "la boucle for";
while ($repetition < 10){
    echo ' <p>Je ne dois pas copier sur mon voisin '.$repetition. 'fois</p>';
    $repetition++;
}
echo "la boucle while";

for ($repetition =0 ; $repetition < 10; $repetition++) {
    echo ' <p>Je ne dois pas copier sur mon voisin '.$repetition. 'fois</p>';
}

?>