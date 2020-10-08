<?php
require_once "conexao.php";




class BebidaDAO{
    public function incluir($novaBebida){

        try{
            $minhaConexao = Conexao::getConnection();

            
            $sql = $minhaConexao->prepare("INSERT INTO itens (nome, fornecedor, preco, tipo)  VALUES (:n, :f, :p, :t)");
            $nome = $novaBebida->getNome();
            $fornecedor = $novaBebida->getFornecedor();
            $preco = $novaBebida->getPreco();  
            $tipo = $novaBebida->getTipo();      
            $sql->bindParam("n",$nome);
            $sql->bindParam("f",$fornecedor);
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