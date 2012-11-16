<?php

function __autoload($class) {
    require_once $class . '.php';
}

echo '<pre>';
$start = microtime(true);
$t = new Teste();
print_r($t->createTable());
;

$fim = microtime(true);
$tempo = $fim - $start;
echo "<br/>finalizado em {$tempo}";