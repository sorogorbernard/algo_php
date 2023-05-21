<?php
function produit_avec_addition($A, $B) {
    $produit = 0;
    
    if ($B < 0) {
        $A = -$A;
        $B = -$B;
    }
    
    for ($i = 0; $i < $B; $i++) {
        $produit += $A;
    }
    
    return $produit;
}

// Exemple d'utilisation
$A = 5;
$B = 4;
$resultat = produit_avec_addition($A, $B);
echo "Le produit de $A et $B est : $resultat";
?>
