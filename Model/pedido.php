<?php

require_once "pedidoDAO.php";


class Pedido{
    private $pedidoId;
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
    public function getPedidoId(){
        return $this->pedidoId;
    }
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
    public function setPedidoId($string){
        return $this->pedidoId = $string;
    }
    public function setClienteId($string){
        return $this->clienteId = $string;
    }
    public function setValorTotal($string){
        return $this->valorTotal = $string;
    }
    public function setEmgetStatusail($string){
        return $this->status = $string;
    }

    public function incluir(){
        $novoPedido = new PedidoDAO();
        return $novoPedido->incluir($this);
    }

    public function pronto($pedidoId){
        $novoPedido = new PedidoDAO();
        return $novoPedido->pronto($pedidoId);
    }

}


?>