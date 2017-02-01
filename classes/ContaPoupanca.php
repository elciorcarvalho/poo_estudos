<?php
class ContaPoupanca extends Conta
{
	private $tipoConta = 'Poupança';

	public function deposito($money)
	{
		if($money > 0){
			$this->saldo += $money;
		}
	}

	public function getTipo()
	{
		return $this->tipoConta;
	}
}