<?php


$acao =  $_GET["acao"];
require_once "../Model/conta.php";
require_once "../Model/cliente.php";

if ($acao == "cadastrar") {

  $valorTotal =  $_GET["valorTotal"];
  $clienteId =  $_GET["clienteId"];

  session_start();
  if (!isset($_SESSION['contaId'])) {
    $novaConta = new Conta($clienteId, $valorTotal);
    $novaConta->incluir();

    header("location: pedidoController.php?acao=cadastrar&contaId=" . $_SESSION['contaId'] . "&valorTotal=" . $valorTotal . "");
  } else {
    $contaId = $_SESSION['contaId'];
    $novaConta = new Conta($clienteId, $valorTotal);
    $novaConta->adicionarValor($contaId, $valorTotal);

    header("location: pedidoController.php?acao=cadastrar&contaId=" . $_SESSION['contaId'] . "&valorTotal=" . $valorTotal . "");
  }
} else if ($acao == "pagar") {

  $bonus = $_GET["bonus"];
  $valorFinal =  $_GET["valorFinal"];
  $id =  $_GET["contaId"];
  session_start();
  $id_usuario = $_SESSION["id_usuario"];

  $contaPaga = new Conta($id, $valorFinal);
  $contaPaga->pagarConta($id, $valorFinal);

  $gerarBonus = new Cliente(0, 0, 0, 0);
  $gerarBonus->gerarBonus($id_usuario, $bonus);


  header("location: ../Controller/sair.php");
}
