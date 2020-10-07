<?php

class Bebida 
{
    private $pdo;
    public $msgErro = "";

    public function conectar($nome, $host, $usuario, $senha)
    {
        global $pdo;
        try
        {
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
        } catch (PDOException $e) {
            global $msgErro;
            $msgErro = $e->getMessage();
        }
        

    }
    public function cadastrar($nome, $fornecedor, $preco)
    {
        global $pdo;
        //verificar se ja existe o nome cadastrado
        $sql = $pdo->prepare("SELECT nome FROM bebidas WHERE nome = :n");
        $sql->bindValue(":n", $nome);
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            return false; //ja esta cadastrada
        }
        else
        {
            //caso nao, cadastrar.
            $sql = $pdo->prepare("INSERT INTO bebidas (nome, fornecedor, preco)  VALUES (:n, :f, :p)");
            $sql->bindValue(":n", $nome);
            $sql->bindValue(":f", $fornecedor);
            $sql->bindValue(":p", $preco);
            $sql->execute();
            return true; //cadastrado com sucesso
        }

     
    }

}


?>