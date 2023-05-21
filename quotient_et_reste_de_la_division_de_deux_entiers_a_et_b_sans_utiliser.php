<?php
function division_sans_operateur($A, $B) {
    if ($B == 0) {
        return null; // Retourne null si B est égal à zéro (division par zéro)
    }

    $quotient = 0;
    $reste = abs($A); // Initialise le reste avec la valeur absolue de A

    while ($reste >= abs($B)) {
        $reste -= abs($B);
        $quotient++;
    }

    // Détermine le signe du quotient
    if (($A < 0 && $B > 0) || ($A > 0 && $B < 0)) {
        $quotient = -$quotient;
    }

    return array($quotient, $reste);
}

// Exemple d'utilisation
$A = 20;
$B = 3;
$resultat = division_sans_operateur($A, $B);
$quotient = $resultat[0];
$reste = $resultat[1];
echo "Quotient : $quotient\n";
echo "Reste : $reste\n";
?>
