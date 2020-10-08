<?php

//require_once "itemDAO.php";


class Item{
    private $itemId;
    private $nome;
    private $preco;

     //Metodos GET
     public function setNome($string){
        return $this->nome = $string;
    }
    public function setPreco($string){
        return $this->preco = $string;
    }
    //Metodos SET
    public function getNome(){
        return $this->nome;
    }
    public function getPreco(){
        return $this->preco;
    }
}

