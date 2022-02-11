<?php

require_once("classes/Produto.php");
require_once("classes/Fabricante.php");

$produto = new Produto('Chocolate', 2000, 5);
$fabricante = new Fabricante('Chocolate Factory', 'Willy Wonka Street', '123456789');

$produto->setFabricante($fabricante);

echo "Nome do Produto: ".$produto->getNome();
echo '<br>';
echo "Nome do Fabricante: ".$produto->getFabricante()->getNome();