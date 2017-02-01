<?php
class Conta
{
	protected $conta;
	protected $agencia;
	protected $saldo;

	/**
	* @parametros string: Numero da conta, string: Numero da agência
	*/
	public function __construct($conta, $agencia)
	{
		$this->conta 	= $conta;
		$this->agencia 	= $agencia;
		$this->saldo = 0;
	}

	/**
	* @return float: saldo atual da conta
	*/
	public function getSaldo()
	{
		return $this->saldo;
	}

	/**
	* @parametro float: dinheiro a ser depositado
	*/
	public function deposito($money)
	{
		if($money > 0){
			$this->saldo += $money;
		}
	}

	/**
	* @return string: informações sobre conta e agência
	*/
	public function getInfo()
	{
		return 'Conta nº ' . $this->conta . ', Agência nº ' . $this->agencia;
	}
}