<?php
    $phrase ='Bonjour je m*appel Gabriel hahihihohooh';
    $nombreCarac = strlen($phrase);

    echo "il y a " .$nombreCarac. " caractères dans cette phrase.";


    // Ecrire une fonction

    function dirBonjour($nom){
        echo 'Bonjour'.$nom;
    }

    dirBonjour('Marie');

    // exemples de fonctions

    strtoupper(); // passe le string en maj
    strtolower(); // passe le string en min
    ucwords(); // premiere lettre des mots en maj

    // sprintf , "%" et "d" signifie qu'on veux afficher un décimal "0" signifique qu'on mettras un zero si les cases sont pas remplie, "2", "2", "4" sont le nombre de nombres à afficher. Après la "," on attribue les valeurs. Ex:
    echo sprintf('%02d/%02d/%04d', 1, 2, 1989);

    echo"<br>";

    $x = 123.456;
    echo number_format($x, 1) // permets de définir combien de nombre après la virgul on affiche arrondis au dessus.


    echo '<br>';

    $mail = 'gabriel@gmail.com';
    $position = strpos($mail , '@'); // on cherche la position dans le mail du caractère arobase

?>