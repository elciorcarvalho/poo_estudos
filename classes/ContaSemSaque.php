<?php
class ContaSemSaque extends Conta
{
	protected $limite;

	public function __construct($conta, $agencia, $limite)
	{
		parent::__construct($conta, $agencia);
		$this->limite = $limite;
	}
}