<?php
require_once "conexao.php";



class ClienteDAO
{
    public function incluir($novoCliente)
    {

        try {
            $minhaConexao = Conexao::getConnection();

            //verificar se ja existe o cpf cadastrado
            $sql = $minhaConexao->prepare("SELECT id_usuario FROM usuarios WHERE cpf = :c");
            $sql->bindValue(":c", $novoCliente->getCpf());
            $sql->execute();
            if ($sql->rowCount() > 0) {
                return false; //Cpf ja cadastrado
            } else //Cadastrar
            {
                $sql = $minhaConexao->prepare("INSERT INTO usuarios (nome, cpf, email, senha, bonus)  VALUES (:n, :c, :e, :s, :b)");
                $nome = $novoCliente->getNome();
                $cpf = $novoCliente->getCpf();
                $email = $novoCliente->getEmail();
                $senha = $novoCliente->getSenha();
                $bonus = $novoCliente->getBonus();
                $sql->bindParam("n", $nome);
                $sql->bindParam("c", $cpf);
                $sql->bindParam("e", $email);
                $sql->bindParam("s", md5($senha));
                $sql->bindParam("b", $bonus);
                $sql->execute();

                return $sql->rowCount();
            }
        } catch (PDOException $e) {
            return "entrou no catch" . $e->getMessage();
        }
    }


    public function logar($cpf, $senha)
    {
        try {
            $minhaConexao = Conexao::getConnection();
            //verificar se o email e senha estao cadastrados, se sim
            $sql = $minhaConexao->prepare("SELECT * FROM usuarios WHERE cpf = :c AND senha = :s");
            $sql->bindValue(":c", $cpf);
            $sql->bindValue(":s", md5($senha));
            $sql->execute();
            if ($sql->rowCount() > 0) {
                //entrar no sistema (sessao)
                $result = $sql->setFetchMode(PDO::FETCH_ASSOC);


                session_start();
                while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                    $_SESSION['id_usuario'] = $linha['id_usuario'];
                    $_SESSION['nome'] = $linha['nome'];
                    $_SESSION['bonus'] = $linha['bonus'];
                    $_SESSION['cpf'] = $linha['cpf'];
                    $_SESSION['poder'] = $linha['poder'];
                }




                return true; //logado com sucesso
            } else {
                return false; //nao foi possivel logar
            }
        } catch (PDOException $e) {
            return "entrou no catch" . $e->getMessage();
        }
    }

    public function gerarBonus($id_usuario, $bonus)
    {
        try {
            $minhaConexao = Conexao::getConnection();


            $sql = $minhaConexao->prepare("UPDATE usuarios SET bonus = '$bonus' WHERE id_usuario = '$id_usuario'");

            $sql->execute();



            return $sql->rowCount();
        } catch (PDOException $e) {
            return "entrou no catch" . $e->getMessage();
        }
    }
}
