<?php

$dataproxima = date("d/m/Y", strtotime("+10 days"));
// lembrando que o marco zero é 01/01/1970 e o strtotime conta segundos a partir dessa data.

echo $dataproxima;
?>