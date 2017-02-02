<?php
require_once 'classes/Pessoa.php';
require_once 'classes/Profissional.php';

$elcior = new Profissional('Elcior Santana', 1980, 'Desenvolvedor Web');

echo "Nome: " . $elcior->getNome() . "<br>\nIdade: " . $elcior->getIdade() . " anos<br>\nProfissão: " . $elcior->getProfissao() . "<br>\n";