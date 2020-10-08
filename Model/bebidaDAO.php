<?php
require_once "conexao.php";




class BebidaDAO{
    public function incluir($novaBebida){

        try{
            $minhaConexao = Conexao::getConnection();

            
            $sql = $minhaConexao->prepare("INSERT INTO bebidas (nome, fornecedor, preco)  VALUES (:n, :f, :p)");
            $nome = $novaBebida->getNome();
            $fornecedor = $novaBebida->getFornecedor();
            $preco = $novaBebida->getPreco();        
            $sql->bindParam("n",$nome);
            $sql->bindParam("f",$fornecedor);
            $sql->bindParam("p",$preco);
          
            $sql->execute();
            
            return true;
        }
    
        catch(PDOException $e) {
            return "entrou no catch".$e->getMessage();
        }
    }
    
}