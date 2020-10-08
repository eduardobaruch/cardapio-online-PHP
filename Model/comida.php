<?php

require_once "item.php";


class Comida extends Item{
    private $descricao;
  

     //Metodos GET
     public function setDescricao($string){
        return $this->descricao = $string;
    }
    //Metodos SET
    public function getDescricao(){
        return $this->descricao;
    }
   
}

