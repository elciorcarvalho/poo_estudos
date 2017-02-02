<?php
abstract class Pessoa
{
	protected $nome;
	protected $nascimento;
	protected $idade;

	public function __construct($nome, $nascimento)
	{
		$this->nome 		= $nome;
		$this->nascimento 	= $nascimento;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function getIdade()
	{
		$this->idade = date('Y') - $this->nascimento;
		return $this->idade;
	}
}