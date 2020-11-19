<?php

require_once "itemDAO.php";


class Item{
    private $pedidoId;
    private $nome;
    private $preco;
    private $quantidade;
    private $precoUnit;
    

    public function __construct($nome, $preco, $quantidade, $pedidoId, $precoUnit)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        $this->pedidoId = $pedidoId;
        $this->precoUnit = $precoUnit;
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
    public function setpedidoId($string){
        return $this->pedidoId = $string;
    }
    public function setPrecoUnit($string){
        return $this->precoUnit = $string;
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
    public function getpedidoId(){
        return $this->pedidoId;
    }
    public function getPrecoUnit(){
        return $this->precoUnit;
    }

    public function incluir(){
        $novoItem = new ItemDAO();
        return $novoItem->incluir($this);
}

    public function excluir($id){
    $novoItem = new ItemDAO();
    return $novoItem->excluir($id);
}
}

