<?php 

$file = fopen("test.log", "w"); // Se escribe el log en www.sebasgracia.com/test.log
fwrite($file, "HTTP POST:" . PHP_EOL);
$cantidad_variables = count($_POST);
$variables = array_keys($_POST);
$valores = array_values($_POST);

for($i=0;$i<$cantidad_variables;$i++){
    fwrite($file, $variables[$i]."=".$valores[$i] . PHP_EOL);
}
fclose($file);
?>