<?php
class ContaCorrente extends Conta
{
	protected $limite;

	public function __construct($conta, $agencia, $limite)
	{
		parent::__construct($conta, $agencia);
		$this->limite = $limite;
	}

	public function saque($money)
	{
		if( $money <= ($this->saldo + $this->limite) ){
			$this->saldo -= $money;
			if($this->saldo < 0){
				echo 'Seu saldo é negativo. Estarão encorrendo juros sobre o emprestimo.<br>' . PHP_EOL;
			}
		} else {
			return false;
		}
		return true;
	}
}