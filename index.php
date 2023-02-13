<?php

include_once 'class_conjunto.php';
$oElementos = new Conjunto();
$oElementos2 = new Conjunto();
$oElementos->setAElementos([2, 3, 5, 6, 8, 9, 5, 5, 5]);
$oElementos2->setAElementos([3, 5, 5, 5, 5, 7, 9]);

echo $oElementos->adicionarElemento(2);
echo "<br><br>";
echo "União: " . $oElementos->uniaoConjuntos($oElementos2);
echo "<br><br>";
echo "Intersecção: " . $oElementos->interConjuntos($oElementos2);
echo "<br><br>";
echo "Diferença: " . $oElementos->diferencaConjunto($oElementos2);
?>