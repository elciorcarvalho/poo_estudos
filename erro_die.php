<?php
function Abrir($file=NULL){
	if(!$file){
		die("Falta o parâmetro com o nome do arquivo.");
	}
	if(!file_exists($file)){
		die("Arquivo não existe");
	}
	if(!$retorno = @file_get_contents($file)){
		die("Impossível ler o arquivo");
	}
	return $retorno;
}

// abrindo um arquivo
$arquivo = Abrir('tmp/arquivo.dat');
echo $arquivo;