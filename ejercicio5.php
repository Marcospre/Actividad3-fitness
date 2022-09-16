<?php
$linea="o";
echo $linea."<br>";
for($i=1;$i<10;$i++){
   $linea = $linea."o";
  echo $linea."<br>";
}

//echo implode('<br>', array_map(fn($x) => str_repeat("o", $x), range(1,10)));