<?php

require_once "pedidoDAO.php";


class Pedido{
    private $pedidoId;
    private $contaId;
    private $valorTotal;
    private $status;
   

    public function __construct($contaId, $valorTotal)
    {
        $this->contaId = $contaId;
        $this->valorTotal = $valorTotal;
        $this->status = false;
        
    }
    //Metodos GET
    public function getPedidoId(){
        return $this->pedidoId;
    }
    public function getContaId(){
        return $this->contaId;
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
    public function setContaId($string){
        return $this->contaId = $string;
    }
    public function setValorTotal($string){
        return $this->valorTotal = $string;
    }
    public function setStatus($string){
        return $this->status = $string;
    }

    public function incluir(){
        $novoPedido = new PedidoDAO();
        return $novoPedido->incluir($this);
    }

    public function pedidoPronto($pedidoId){
        $novoPedido = new PedidoDAO();
        return $novoPedido->pronto($pedidoId);
    }

}


?>