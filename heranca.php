<?php

require_once 'classes/Conta.php';
require_once 'classes/ContaPoupanca.php';
require_once 'classes/ContaCorrente.php';

$cp = new ContaPoupanca('123.456.789', '1234-65');
$cp->deposito(1234.69);

echo 'Conta do tipo: ' . $cp->getTipo() . "<br>\n";
echo 'Informações sobre: ' . $cp->getInfo() . "<br>\n";
echo 'Saldo: R$ ' . $cp->getSaldo() . "<br>\n";

$cp->saque(200);
echo 'Novo saldo: R$ ' . $cp->getSaldo() . "<br>\n";

$cc = new ContaCorrente('123.789.456', '1234-65', 3000);
$cc->deposito(20000.00);

echo 'Informações sobre: ' . $cc->getInfo() . "<br>\n";
echo 'Saldo: R$ ' . $cc->getSaldo() . "<br>\n";

$cc->saque(22000.50);
echo 'Novo saldo: R$ ' . $cc->getSaldo() . "<br>\n";