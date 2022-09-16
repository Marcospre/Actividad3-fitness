<?php
$sum = 0;

for($i = $_GET['prim']; $i <= $_GET['ult']; $i++ ){
    $sum = $sum + $i;
}
echo "la suma es ".$sum;