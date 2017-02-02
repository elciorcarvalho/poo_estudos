<?php
abstract class Pessoa
{
	protected $nome;
	protected $nascimento;
	protected $idade;

	public function __construct($nome, $nascimento)
	{
		if(is_string($nome)){
			$this->nome	= $nome;
		} else {
			echo '<p>Não foi prossível configurar o nome.</p>';
			return false;
		}

		if(is_numeric($nascimento) && $nascimento > 1900 && $nascimento < date('Y')){
			$this->nascimento = $nascimento;
		} else {
			$this->nascimento = 0;
			echo '<p>Não foi prossível configurar a idade.</p>';
		}
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function getIdade()
	{
		return $this->idade = date('Y') - $this->nascimento;			
	}
}