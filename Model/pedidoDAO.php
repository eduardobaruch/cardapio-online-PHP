<?php
require_once "conexao.php";



class PedidoDAO{
    public function incluir($novoPedido){

        try{
            $minhaConexao = Conexao::getConnection();

           
            $sql = $minhaConexao->prepare("INSERT INTO pedidos (clienteId, valorTotal, status)  VALUES (:c, :v, :s)");
            $clienteId = $novoPedido->getClienteId();
            $valorTotal = $novoPedido->getValorTotal();
            $status = $novoPedido->getStatus();
            $sql->bindParam("c",$clienteId);
            $sql->bindParam("v",$valorTotal);
            $sql->bindParam("s",$status);
            $sql->execute();
            $id = $minhaConexao->lastInsertId();
            
            session_start();
            $_SESSION['pedidoId'] = $id;
            
            return $sql->rowCount();
        }
    
        catch(PDOException $e) {
            return "entrou no catch".$e->getMessage();
        }
    }
    
    

    public function pronto($pedidoId)
    {
       
}
}