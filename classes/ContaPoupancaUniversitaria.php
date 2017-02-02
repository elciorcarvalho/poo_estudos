<?php
class ContaPoupancaUniversitaria extends ContaPoupanca
{

	public function saque($money)
	{
		return $this->saldo -= $money;
	}
}