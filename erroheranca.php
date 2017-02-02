<?php
require_once 'classes/Conta.php';
require_once 'classes/ContaPoupanca.php';

// Erro classe filha não pode herdar uma classe pai final
//require_once 'classes/ContaPoupancaUniversitaria.php';

// Erro classe filha tem que implementar todos os metodos abstratos da classe pai 
//require_once 'classes/ContaSemSaque.php';

// Erro por instanciar uma classe abstrata
//$c = new Conta('123456789', '1234');

echo '<p>Fim do programa!</p>';