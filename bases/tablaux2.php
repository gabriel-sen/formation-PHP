<?php

echo 'Il est possible d\'assigner une valeur à une case du tableau' . '<br>';
$nb[] = 1;
$nb[] = 2;
$nb[] = 3;
$nb[] = 4;
// var_dump($nb);
print_r($nb);
echo '<br><br>';


echo 'Il est possible d\'assigner une valeur à une clé string stocké' . '<br>';
$nb2['dix-sept'] = 17;
$nb2['cinq'] = 5;
$nb2['douze'] = 12;
// var_dump($nb2);
print_r($nb2);
echo '<br><br>';


echo 'Il est possible d\'assigner une valeur string à un nombre stocké' . '<br>';
$nb3[17] = 'dix-sept';
$nb3[5] = 'cinq';
$nb3[12] = 'douze';
// var_dump($nb3);
print_r($nb3);
echo '<br><br>';

echo 'il est possible d\'assigner des valeurs avec la déclaration de tableau array()' . '<br>';
$prenom = array('Mathieu','Marie','Robert');
print_r($prenom);
echo '<br><br>';


echo 'il est possible d\'avoir des tablaux dans des tablaux' . '<br>';
$villes = array('FANCE' => array('Paris' , 'Nantes'), 'ITALIE' => array('Rome', 'Venise'));
//var_dump($villes);
print_r($villes);
echo '<br><br>';



echo 'il est possible de créer un tableau a partir d\'une chaine de caractères sous forme de liste dans un tableau via la fcontion explode() en specifiant le séparateur' . '<br>';
$liste ='bleu, vert, orange';
var_dump($liste);
//On specifie le séparateur et la liste à exploser, puis on re-stock
$couleur = explode(',', $liste);

// on affiche le tableau
var_dump($couleur);
echo '<br><br>';


echo 'il est possible de créer une chaine de caractère à partir d\'un tableau implode() en specifiant le séparateur' . '<br>';
$couleur2 = implode(',', $couleur);
var_dump($couleur2);


?>