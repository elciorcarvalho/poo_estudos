<pre>

<?php

require_once 'classes/Produto.php';
require_once 'classes/Cesta.php';

$c1 = new Cesta();

$p1 = new Produto('Maçã', 5, 3.8);
/*$p2 = new Produto('Pelucia', 1, 55);
$p3 = new Produto('Caixa de Bombom', 1, 19);*/
$c1->addItens($p1);

/*for($i = 1; $i < 4; $i++){
	$var = 'p' . $i;
	$c1->addItens($$var);
}*/

/*print_r($c1);*/

foreach($item as $c1->getItens()->getdescricao()) {
	echo 'Item: ' . $item . "<br>\n";
}

?>

</pre>