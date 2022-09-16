<?php
$pares = true;

if($pares == true){
    for($i = 1; $i < rand(1,99); $i++){
        if(i%2 == 0){
            echo $i;
        }
    }
}else{
    for($j = 1; $j < rand(1,99); $j++){
        if($j%2 != 0){
            echo $j;
        }
    }
}