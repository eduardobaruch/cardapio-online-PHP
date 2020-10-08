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


    public function buscarComidas($comida){

        try{
            $minhaConexao = Conexao::getConnection();

            $tipo = "comida";
            $sql = $minhaConexao->prepare("SELECT INTO itens WHERE tipo = $tipo");
            
            $sql->execute();

            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            $vet = array();
            $i=0;

            while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
                $vet[$i]=array($linha['nome'],$linha['descricao'],$linha['preco']);
                $i++;
            }
            
            return true;
        }
    
        catch(PDOException $e) {
            return "entrou no catch".$e->getMessage();
        }
    }
    
    
}