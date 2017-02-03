<?php
class Pessoa2
{
	protected $nome;
	protected $sexo;
	const SEXO = array("F" => "Feminino", "M" => "Masculino");

	public function __construct($n, $s)
	{
		$this->nome = $n;
		$this->sexo = $s;
		
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function getSexo()
	{
		return self::SEXO[$this->sexo];
	}
}
