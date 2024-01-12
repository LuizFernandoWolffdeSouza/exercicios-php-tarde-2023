<?php


$n1 = $_GET['n1'];

$result = 0;    
for($i = $n1; $i > 1; $i--) { 

    $result = $result * $i;

    
}

echo $result;

?>