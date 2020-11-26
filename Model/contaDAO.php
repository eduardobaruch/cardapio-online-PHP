<?php
session_start();
require_once "conexao.php";



class ContaDAO
{
    public function incluir($novaConta)
    {

        try {
            $minhaConexao = Conexao::getConnection();


            $sql = $minhaConexao->prepare("INSERT INTO conta (clienteId, valorConta,  status)  VALUES (:c, :v, :s)");
            $clienteId = $novaConta->getClienteId();
            $valorTotal = $novaConta->getValorTotal();
            $status = $novaConta->getStatus();
            $sql->bindParam("c", $clienteId);
            $sql->bindParam("v", $valorTotal);
            $sql->bindParam("s", $status);
            $sql->execute();
            $id = $minhaConexao->lastInsertId();

            session_start();
            $_SESSION['contaId'] = $id;

            return $sql->rowCount();
        } catch (PDOException $e) {
            return "entrou no catch" . $e->getMessage();
        }
    }



    public function adicionarValor($contaId, $valorTotal)
    {
        try {
            $minhaConexao = Conexao::getConnection();


            $sql = $minhaConexao->prepare("UPDATE conta SET valorConta = valorConta + '$valorTotal' WHERE id_conta = '$contaId'");

            $sql->execute();



            return $sql->rowCount();
        } catch (PDOException $e) {
            return "entrou no catch" . $e->getMessage();
        }
    }

    public function pagarConta($contaId, $valorFinal)
    {
        try {
            $minhaConexao = Conexao::getConnection();


            $sql = $minhaConexao->prepare("UPDATE conta SET status = 1, valorConta = '$valorFinal'  WHERE id_conta = '$contaId'");

            $sql->execute();

            
            unset($_SESSION['contaId']);

            return $sql->rowCount();
        } catch (PDOException $e) {
            return "entrou no catch" . $e->getMessage();
        }
    }
}
