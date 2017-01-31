<?php
class Cesta
{
	private $itens;
	private $time;

	public function __construct()
	{
		$this->time = date('Y-m-d H:i:s');
		$this->itens = array();
	}

	public function addItens(Produto $p)
	{
		$this->itens[] = $p;
	}

	public function getItens()
	{
		return $this->itens;
	}

	public function getTime()
	{
		return $this->time;
	}

}