<?php
function est_divisible($A, $B) {
    if ($A < 0 || $B < 0) {
        return false; // Les entiers doivent être positifs
    }
    
    if ($B == 0) {
        return false; // Division par zéro n'est pas possible
    }
    
    if ($A % $B == 0) {
        return true; // A est divisible par B
    } else {
        return false; // A n'est pas divisible par B
    }
}

// Exemple d'utilisation
$A = 15;
$B = 3;
if (est_divisible($A, $B)) {
    echo "$A est divisible par $B";
} else {
    echo "$A n'est pas divisible par $B";
}
?>
