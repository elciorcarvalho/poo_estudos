<?php
class ContaPoupanca extends Conta
{
	private $tipoConta = 'Poupança';

	public function saque($money)
	{
		if($money <= $this->saldo){
			$this->saldo -= $money;
		}
	}

	public function getTipo()
	{
		return $this->tipoConta;
	}
}