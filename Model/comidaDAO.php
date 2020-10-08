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
    
}