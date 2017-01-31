<pre>

<?php

require_once 'classes/Produto.php';
require_once 'classes/Cesta.php';

$c1 = new Cesta();

$p1 = new Produto('Maçã', 5, 3.8);
$p2 = new Produto('Pelucia', 1, 55);
$p3 = new Produto('caixa de bombom', 1, 19);

for($i = 1; $i < 4; $i++){
	$var = 'p' . $i;
	$c1->addItens($$var);
}

var_dump($c1);

/*foreach ($c1->getItens()->itens as $item) {
	echo 'Item: ' . $item . "<br>\n";
}*/

?>

</pre>