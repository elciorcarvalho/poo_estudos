<?php
require_once 'classes/Conta.php';
require_once 'classes/ContaPoupanca.php';
require_once 'classes/Pessoa2.php';

$cp = new ContaPoupanca('123456789', '1234');
echo "Essa é a constante " . ContaPoupanca::GERENTE . "<br>\n";
echo "Este é o gerente da {$cp->getInfo()}: {$cp->getGerente()}<br>\n";

echo "<hr>";

$p1 = new Pessoa2('Maria dos Anjos', 'F');
$p2 = new Pessoa2('José Silva', 'M');
echo "Nome: {$p1->getNome()}<br>\n";
echo "Sexo: {$p1->getSexo()}<br>\n";
echo "Nome: {$p2->getNome()}<br>\n";
echo "Sexo: {$p2->getSexo()}<br>\n";