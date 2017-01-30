<?php
require_once 'classes/Fabricante.php';
require_once 'classes/Produto.php';

$p1 = new Produto('Chocolate Amargo', 100, 7);
$f1 = new Fabricante('Chocolate Factory', 'Willy Wonka Street', '1234598235');

$p1->setFabricante($f1);

echo 'O produto é ' . $p1->getDescricao() . "<br>\n";
echo 'O Fabricante é ' . $p1->getFabricante()->getNome() . "<br>\n";