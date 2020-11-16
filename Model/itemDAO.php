<?php
require_once "conexao.php";




class ItemDAO{
    public function incluir($novoItem){

        try{
            $minhaConexao = Conexao::getConnection();

            
            $sql = $minhaConexao->prepare("INSERT INTO pedido (nome, preco, quantidade, contaId)  VALUES (:n, :p, :q, :c)");
            $nome = $novoItem->getNome();
            $preco = $novoItem->getpreco();
            $quantidade = $novoItem->getQuantidade();  
            $contaId = $novoItem->getContaId();      
            $sql->bindParam("n",$nome);
            $sql->bindParam("p",$preco);
            $sql->bindParam("q",$quantidade);
            $sql->bindParam("c",$contaId);
          
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



    
}