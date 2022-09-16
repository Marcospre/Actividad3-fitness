//http://localhost:8080/Actividad3-fitness/ejercicio6.php?par = 30
<?php
$linea="o";
echo $linea."<br>";
for($i=1;$i<$_GET['par'];$i++){
    $linea = $linea."o";
    echo $linea."<br>";
}