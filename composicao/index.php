<?php 

require_once("classes/Produto.php");
require_once("classes/Caracteristica.php");

$produto = new Produto('Chocolate', 1000, 5);

$produto->addCaracteristica('Sabor', 'Chocolate Amargo');
$produto->addCaracteristica('Sabor', 'Chocolate ao Leite');
$produto->addCaracteristica('Sabor', 'Chocolate Branco');

foreach ($produto->getCaracteristicas() as $c) 
{
    echo "Caracteristica: ".$c->getNome()." - ".$c->getValor();
    echo '<br>';
}