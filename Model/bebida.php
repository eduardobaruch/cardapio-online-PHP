<?php

require_once "item.php";
require_once "bebidaDAO.php";


class Bebida extends Item{
    private $fornacedor;

    public function __construct($nome, $fornecedor, $preco)
    {
        $this->nome = $nome;
        $this->fornecedor = $fornecedor;
        $this->preco = $preco;
    }
  

     //Metodos SET
     public function setFornecedor($string){
        return $this->fornecedor = $string;
    }
    //Metodos GET
    public function getFornecedor(){
        return $this->fornecedor;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getPreco(){
        return $this->preco;
    }
    //Funcao Cadastrar
    public function incluir(){
        $novaBebida = new BebidaDAO();
        return $novaBebida->incluir($this);
   
}
}

