<?php
function trouver_min_max($ensemble) {
    if (empty($ensemble)) {
        return null; // Retourne null si l'ensemble est vide
    }
    
    $minimum = $maximum = $ensemble[0]; // Initialise le minimum et le maximum au premier nombre de l'ensemble
    
    foreach ($ensemble as $nombre) {
        if ($nombre < $minimum) {
            $minimum = $nombre;
        }
        if ($nombre > $maximum) {
            $maximum = $nombre;
        }
    }
    
    return array($minimum, $maximum);
}

// Exemple d'utilisation
$nombres = array(5, 3, 8, 2, 1, 9, 4);
$resultat = trouver_min_max($nombres);
$min = $resultat[0];
$max = $resultat[1];
echo "Le minimum est $min";
echo "Le maximum est $max";
?>
