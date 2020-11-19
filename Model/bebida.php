<?php

require_once "item.php";
require_once "bebidaDAO.php";


class Bebida extends Item
{
    private $fornecedor;

    public function __construct($nome, $fornecedor, $preco)
    {
        $this->nome = $nome;
        $this->fornecedor = $fornecedor;
        $this->preco = $preco;
        $this->tipo = "bebida";
    }


    //Metodos SET
    public function setFornecedor($string)
    {
        return $this->fornecedor = $string;
    }
    public function setId($string)
    {
        return $this->itemId = $string;
    }
    //Metodos GET
    public function getFornecedor()
    {
        return $this->fornecedor;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getId()
    {
        return $this->itemId;
    }
    public function getPreco()
    {
        return $this->preco;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    //Funcao Cadastrar
    public function incluir()
    {
        $novaBebida = new BebidaDAO();
        return $novaBebida->incluir($this);
    }
    public function editar()
    {
        $editaBebida = new bebidaDAO();
        return $editaBebida->editar($this);
    }
}
