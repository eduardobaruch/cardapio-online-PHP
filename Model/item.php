<?php

require_once "itemDAO.php";


class Item{
    private $contaId;
    private $nome;
    private $preco;
    private $quantidade;
    

    public function __construct($nome, $preco, $quantidade, $contaId)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        $this->contaId = $contaId;
    }

     //Metodos GET
     public function setNome($string){
        return $this->nome = $string;
    }
    public function setPreco($string){
        return $this->preco = $string;
    }
    public function setQuantidade($string){
        return $this->quantidade = $string;
    }
    public function setContaId($string){
        return $this->contaId = $string;
    }
    //Metodos SET
    public function getNome(){
        return $this->nome;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function getQuantidade(){
        return $this->quantidade;
    }
    public function getContaId(){
        return $this->contaId;
    }

    public function incluir(){
        $novoItem = new ItemDAO();
        return $novoItem->incluir($this);
}
}

