<?php
$temperatura = $_GET['temperatura'];
$graus = $_GET['graus'];


if ($temperatura == 1) {
    echo cpf($graus);
}
else {
    echo fpc($graus);
}

function cpf($graus) {
   $result = ($graus * 9/5) + 32;

   return $result;
};

function fpc($graus) {
   $result = ($graus - 32) * 5/9;

   return $result;
};


?>