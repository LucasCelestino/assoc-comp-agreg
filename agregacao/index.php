<?php 

require_once("classes/Produto.php");
require_once("classes/Cesta.php");

$p1 = new Produto('Chocolate', 1000, 5);
$p2 = new Produto('Arroz', 500, 10);
$p3 = new Produto('Café', 1500, 8);

$cesta = new Cesta();

$cesta->addItem($p1);
$cesta->addItem($p2);
$cesta->addItem($p3);

foreach ($cesta->getItens() as $produto)
{
    echo "Nome: ".$produto->getNome()." | Preço: R$".$produto->getPreco();
    echo '<br>';
}