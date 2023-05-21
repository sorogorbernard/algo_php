<?php
function calculer_somme_chiffres($N) {
    $somme = 0;
    
    // Convertir N en une chaîne de caractères pour itérer sur chaque chiffre
    $chiffres = str_split((string) $N);
    
    foreach ($chiffres as $chiffre) {
        $somme += (int) $chiffre; // Ajouter chaque chiffre à la somme
    }
    
    return $somme;
}

// Exemple d'utilisation
$N = 12345;
$resultat = calculer_somme_chiffres($N);
echo "La somme des chiffres de $N est : $resultat";
?>
