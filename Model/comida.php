<?php

require_once "item.php";
require_once "comidaDAO.php";


class Comida extends Item{
    private $descricao;

    public function __construct($nome, $descricao, $preco)
    {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->tipo = "comida";
    }
  

     //Metodos SET
     public function setDescricao($string){
        return $this->descricao = $string;
    }
    //Metodos GET
    public function getDescricao(){
        return $this->descricao;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function getTipo(){
        return $this->tipo;
    }
    //Funcao Cadastrar
    public function incluir(){
        $novaComida = new comidaDAO();
        return $novaComida->incluir($this);
   
}
}

