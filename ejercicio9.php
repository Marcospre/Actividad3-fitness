<?php
$num = $_GET['num'];
$prim = 0;

for ($i = 2;$i < $num;$i++){
    if($num%$i == 0){
        $prim = 1;
    }
}

if($prim == 0){
    echo "es primo";
}else{
    echo "no es primo";
}