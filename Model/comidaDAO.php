<?php
require_once "conexao.php";




class ComidaDAO{
    public function incluir($novaComida){

        try{
            $minhaConexao = Conexao::getConnection();

            
            $sql = $minhaConexao->prepare("INSERT INTO itens (nome, descricao, preco, tipo)  VALUES (:n, :d, :p, :t)");
            $nome = $novaComida->getNome();
            $descricao = $novaComida->getDescricao();
            $preco = $novaComida->getPreco();  
            $tipo = $novaComida->getTipo();      
            $sql->bindParam("n",$nome);
            $sql->bindParam("d",$descricao);
            $sql->bindParam("p",$preco);
            $sql->bindParam("t",$tipo);
          
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