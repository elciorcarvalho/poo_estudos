<?php
class CSVParser
{
	private $filename, $data, $header, $counter, $separador;

	public function __construct($filename, $separador = ',')
	{
		$this->filename = $filename;
		$this->separador = $separador;
		$this->counter = 1;
	}

	public function parse()
	{
		$this->data = file($this->filename);
		$this->header = str_getcsv($this->data[0], $this->separador);
	}

	public function fetch()
	{
		if( isset($this->data[ $this->counter ]))
		{
			$row = str_getcsv( $this->data[ $this->counter++ ], $this->separador );
			foreach( $row as $key => $value ){
				$row[ $this->header[$key] ] = $value;
			}

			return $row;
		}
	}
}