<?php
$bol = $_GET['bol'];

if($bol == "true"){
    for($i = 1; $i < rand(1,99); $i++){
        if($i%2 == 0){
            echo $i;
        }
    }
}else{
    for($i = 1; $i < rand(1,99); $i++){
        if($i%2 != 0){
            echo $i;
        }
    }
}