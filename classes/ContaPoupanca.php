<?php
final class ContaPoupanca extends Conta
{
	const GERENTE = 'Sr. Elcior Santana';

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

	public function getGerente()
	{
		return self::GERENTE;
	}
}