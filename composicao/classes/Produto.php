<?php

class Produto
{
    private $nome;
    private $qtd_estoque;
    private $preco;
    private $caracteristicas;

    public function __construct($nome, $estoque, $preco)
    {
        $this->nome = $nome;
        $this->qtd_estoque = $estoque;
        $this->preco = $preco;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEstoque()
    {
        return $this->qtd_estoque;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function addCaracteristica($nome, $valor)
    {
        $this->caracteristicas[] = new Caracteristica($nome, $valor);
    }

    public function getCaracteristicas()
    {
        return $this->caracteristicas;
    }
}