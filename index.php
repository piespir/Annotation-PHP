<?php

function __autoload($class) {
    require_once $class . '.php';
}

echo '<pre>';
$start = microtime(true);
$t = new Teste();
print_r($t->getIdDesc());
;
print_r( $t->getvar1());
$fim = microtime(true);
$tempo = $fim - $start;
echo "<br/>finalizado em {$tempo}";