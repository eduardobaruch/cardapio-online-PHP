<?php

require_once "contaDAO.php";


class Conta{

    private $clienteId;
    private $valorTotal;
    private $status;
   

    public function __construct($clienteId, $valorTotal)
    {
        $this->clienteId = $clienteId;
        $this->valorTotal = $valorTotal;
        $this->status = false;
        
    }
    //Metodos GET
   
    public function getClienteId(){
        return $this->clienteId;
    }
    public function getValorTotal(){
        return $this->valorTotal;
    }
    public function getStatus(){
        return $this->status;
    }
  

    //Metodos SET
 
    public function setClienteId($string){
        return $this->clienteId = $string;
    }
    public function setValorTotal($string){
        return $this->valorTotal = $string;
    }
    public function setStatus($string){
        return $this->status = $string;
    }

    public function incluir(){
        $novaConta = new contaDAO();
        return $novaConta->incluir($this);
    }

    public function adicionarValor($contaId, $valorTotal){
        $novaConta = new contaDAO();
        return $novaConta->adicionarValor($contaId, $valorTotal);
    }
    public function pagarConta($contaId, $valorFinal){
        $novaConta = new contaDAO();
        return $novaConta->pagarConta($contaId, $valorFinal);
    }

}
