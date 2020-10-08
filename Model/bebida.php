<?php

require_once "item.php";


class Comida extends Item{
    private $fornacedor;
  

     //Metodos GET
     public function setFornecedor($string){
        return $this->fornecedor = $string;
    }
    //Metodos SET
    public function getFornecedor(){
        return $this->fornecedor;
    }
   
}

