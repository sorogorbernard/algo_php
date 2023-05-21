<?php
function est_premier($X) {
    if ($X <= 1) {
        return false; // Retourne false si X est inférieur ou égal à 1 (les nombres premiers sont strictement supérieurs à 1)
    }
    
    for ($i = 2; $i <= sqrt($X); $i++) {
        if ($X % $i == 0) {
            return false; // Retourne false si X est divisible par un nombre entre 2 et sa racine carrée
        }
    }
    
    return true; // X est premier
}

// Exemple d'utilisation
$X = 17;
if (est_premier($X)) {
    echo "$X est un nombre premier";
} else {
    echo "$X n'est pas un nombre premier";
}
?>
