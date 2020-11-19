<?php
require_once "conexao.php";




class ItemDAO{
    public function incluir($novoItem){

        try{
            $minhaConexao = Conexao::getConnection();

            
            $sql = $minhaConexao->prepare("INSERT INTO itenspedidos (nome, preco, quantidade, pedidoId, precoUnit)  VALUES (:n, :p, :q, :z, :y)");
            $nome = $novoItem->getNome();
            $preco = $novoItem->getpreco();
            $quantidade = $novoItem->getQuantidade();  
            $pedidoId = $novoItem->getpedidoId();    
            $precoUnit = $novoItem->getPrecoUnit();   
            $sql->bindParam("n",$nome);
            $sql->bindParam("p",$preco);
            $sql->bindParam("q",$quantidade);
            $sql->bindParam("z",$pedidoId);
            $sql->bindParam("y",$precoUnit);
          
            $sql->execute();
            
            return true;
        }
    
        catch(PDOException $e) {
            return "entrou no catch".$e->getMessage();
        }
    }


    public function editar($editaComida){

        try{
            $minhaConexao = Conexao::getConnection();

            
            $sql = $minhaConexao->prepare("UPDATE itens SET nome = :n, descricao = :d, preco = :p WHERE id_item = :i");
            $nome = $editaComida->getNome();
            $descricao = $editaComida->getDescricao();
            $preco = $editaComida->getPreco();  
            $id = $editaComida->getId();      
            $sql->bindParam("n",$nome);
            $sql->bindParam("d",$descricao);
            $sql->bindParam("p",$preco);
            $sql->bindParam("i",$id);
          
            $sql->execute();
            
            return true;
        }
    
        catch(PDOException $e) {
            return "entrou no catch".$e->getMessage();
        }
    }

    public function excluir($id){

        try{
            $minhaConexao = Conexao::getConnection();

            $id = $_GET['id'];
            $sql = $minhaConexao->prepare("DELETE FROM itens WHERE id_item = '$id'");
            $sql->execute();
            
            return true;
        }
    
        catch(PDOException $e) {
            return "entrou no catch".$e->getMessage();
        }
    }




    
}