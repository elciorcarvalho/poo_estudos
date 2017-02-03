<?php
require_once 'classes/Conta.php';
require_once 'classes/ContaPoupanca.php';

$cp = new ContaPoupanca('123456789', '1234');
echo "Essa é a constante " . ContaPoupanca::GERENTE . "<br>\n";

echo "Este é o gerente da {$cp->getInfo()}: {$cp->getGerente()}";