<?php
function somme_n_premiers_entiers($n) {
    $somme = 0;
    for ($i=1; $i <=n; $i++) {
        $somme += $i;
    }
    return $somme;
}
$resultat = somme_n_premiers_entiers($n);
echo"la somme des $n premiers nombres entiers est $resultat";

?>