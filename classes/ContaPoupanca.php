<?php
class ContaPoupanca extends Conta
{
	protected $tipoConta = 'Poupança';

	public function saque($money)
	{
		if($money <= $this->saldo){
			$this->saldo -= $money;
		} else {
			return false;
		}
		return true;
	}

	public function getTipo()
	{
		return $this->tipoConta;
	}
}