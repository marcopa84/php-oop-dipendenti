<?php
require_once __DIR__ . '/classes/dipendenti.php';
require_once __DIR__ . '/classes/dirigente.php';
require_once __DIR__ . '/classes/operaio.php';

$marco = new Dirigente('12345', 'Marco', 'Patti', 'via Roma', 'cbvnusahgan', 'it77sdvsadv31e31', 3);
var_dump($marco);

try {
    $marco->setBonus(5);
} catch (Exception $e) {
    echo 'errore' . $e->getMessage();
}
var_dump($marco);

echo $marco->getBonus();

echo $marco->visualizzaDipendente();


var_dump($marco->visualizzaDipendente());

