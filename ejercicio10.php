<?php
$num = $_GET['num'];
$prim = 0;

for( $j = 1 ; $j<= $num; $j++){
    $prim = 0;
    if($j == 1){
        echo "1 es primo<br>";
    }else{
        for ($i = 2;$i < $j;$i++){
            if($j%$i == 0){
                $prim = 1;
            }
        }
        
        if($prim == 0){
            echo $j." es primo<br>";
        }else{
            echo $j." no es primo<br>";
        }
    }
}