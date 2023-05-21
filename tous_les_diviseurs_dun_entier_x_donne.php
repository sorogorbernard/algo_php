<?php
function trouver_diviseurs($X) {
    if ($X <= 0) {
        return []; // Retourne un tableau vide si X est inférieur ou égal à zéro
    }
    
    $diviseurs = [];
    
    for ($i = 1; $i <= $X; $i++) {
        if ($X % $i == 0) {
            $diviseurs[] = $i; // Ajoute le diviseur à la liste des diviseurs
        }
    }
    
    return $diviseurs;
}

// Exemple d'utilisation
$X = 24;
$resultat = trouver_diviseurs($X);
echo "Les diviseurs de $X sont : " . implode(", ", $resultat);
?>
