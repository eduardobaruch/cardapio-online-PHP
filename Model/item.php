<?php

//require_once "itemDAO.php";


class Item{
    private $itemId;
    private $nome;
    private $preco;
    private $tipo;

     //Metodos GET
     public function setNome($string){
        return $this->nome = $string;
    }
    public function setPreco($string){
        return $this->preco = $string;
    }
    public function setTipo($string){
        return $this->tipo = $string;
    }
    //Metodos SET
    public function getNome(){
        return $this->nome;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function getTipo(){
        return $this->tipo;
    }
}

