<?php

class Produto
{
    private $nome;
    private $qtd_estoque;
    private $preco;
    private $fabricante;

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

    public function setFabricante(Fabricante $f)
    {
        $this->fabricante = $f;
    }

    public function getFabricante()
    {
        return $this->fabricante;
    }
}