<?php
require_once 'classes/Conta.php';
require_once 'classes/ContaCorrente.php';
require_once 'classes/ContaPoupanca.php';

$contas[] = new ContaCorrente('cc.123.456', '78945', 500);
$contas[] = new ContaPoupanca('cp.123.654', '45986');

foreach ($contas as $conta) {
	echo "Conta: {$conta->getInfo()}<br>\n";
	$conta->deposito(100);
	echo "Saldo: R$ {$conta->getSaldo()}<br>\n";
	if($conta->saque(200)){
		echo "Saque efetuado com sucesso.<br>\n";		
	} else {
		echo "Não é possível efetuar o saque.<br>\n";
	}
	echo "Saldo atual: R$ {$conta->getsaldo()}<hr>";
}