<?php
class Profissional extends Pessoa
{
	protected $profissao;

	public function __construct($nome, $nascimento, $profissao)
	{
		parent::__construct($nome, $nascimento);
		if(is_string($profissao)){
			$this->profissao = $profissao;
		} else {
			echo '<p>Não foi prossível configurar a profissão.</p>';
			return false;
		}
		return true;
	}

	public function getProfissao()
	{
		return $this->profissao;
	}
}