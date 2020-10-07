<?php

class Usuario 
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
    public function cadastrar($nome, $cpf, $email, $senha)
    {
        global $pdo;
        //verificar se ja existe o cpf cadastrado
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE cpf = :c");
        $sql->bindValue(":c", $cpf);
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            return false; //ja esta cadastrada
        }
        else
        {
            //caso nao, cadastrar.
            $sql = $pdo->prepare("INSERT INTO usuarios (nome, cpf, email, senha)  VALUES (:n, :c, :e, :s)");
            $sql->bindValue(":n", $nome);
            $sql->bindValue(":c", $cpf);
            $sql->bindValue(":e", $email);
            $sql->bindValue(":s", md5($senha));
            $sql->execute();
            return true; //cadastrado com sucesso
        }

        
    }

    public function logar($cpf, $senha)
    {
        global $pdo;
        //verificar se o email e senha estao cadastrados, se sim
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE cpf = :c AND senha = :s");
        $sql->bindValue(":c", $cpf);
        $sql->bindValue(":s", md5($senha));
        $sql->execute();
        if (count($sql) > 0)
        {
            //entrar no sistema (sessao)
            foreach($sql as $res) {
                
                session_start();
                $_SESSION['id_usuario'] = $res['id_usuario'];
                $_SESSION['nome'] = $res['nome'];
                $_SESSION['bonus'] = $res['bonus'];
    
            }
           
          


            return true; //logado com sucesso
        }
        else
        {
            return false; //nao foi possivel logar
        }
    }
        public function logado($id) 
        {
            global $pdo;

            $array = array();

            $sql = "SELECT * FROM usuarios WHERE id_usuario = :id";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":id", $id);
            $sql->execute();

            if($sql->rouCount() > 0) {
                $array = $sql->fetchAll();
            }

            return $array;
        }

    


}


?>