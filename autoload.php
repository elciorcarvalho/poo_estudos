<?php
function __autoload($classe)
{
	$includando = "classes/{$classe}.php";
	include_once "$includando";
}

$p = new Pessoa2('José Manuel', 'M');
print_r($p);