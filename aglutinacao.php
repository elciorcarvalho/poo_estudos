<pre>

<?php

require_once 'classes/Produto.php';
require_once 'classes/Cesta.php';

$c1 = new Cesta();

$p1 = new Produto('Maçã', 5, 3.8);
$p2 = new Produto('Pelucia', 1, 55);
$p3 = new Produto('Caixa de Bombom', 1, 19);

for($i = 1; $i < 4; $i++){
	$var = 'p' . $i;
	$c1->addItens($$var);
}

foreach($c1->getItens() as $item) {
	echo 'Item: ' . $item->getDescricao() . "<br>\n";
}

?>

</pre>
