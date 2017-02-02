<?php
class Profissional extends Pessoa
{
	protected $profissao;

	public function __construct($nome, $nascimento, $profissao)
	{
		parent::__construct($nome, $nascimento);
		$this->profissao = $profissao;
	}

	public function getProfissao()
	{
		return $this->profissao;
	}
}