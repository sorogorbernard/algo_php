<?php
function calcul_binaire($N) {
    if ($N === 0) {
        return "0"; // Cas particulier pour 0
    }
    
    $binaire = "";
    
    while ($N > 0) {
        $binaire = ($N % 2) . $binaire; // Ajoute le reste de la division par 2 à gauche de la représentation binaire
        $N = (int)($N / 2); // Effectue la division entière par 2
    }
    
    return $binaire;
}

// Exemple d'utilisation
$N = 42;
$resultat = calcul_binaire($N);
echo "Le binaire de $N est : $resultat";
?>
